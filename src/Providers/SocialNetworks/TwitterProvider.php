<?php

    namespace iiiicaro\SentimentThermometer\Providers\SocialNetworks;

    use Abraham\TwitterOAuth\TwitterOAuth;
    use iiiicaro\SentimentThermometer\Providers\Exceptions\ErrorFetchingTwitter;
    use iiiicaro\SentimentThermometer\Providers\Exceptions\InvalidTwitterConfiguration;
    use iiiicaro\SentimentThermometer\Providers\SocialNetworks\Validators\TwitterValidator;

    class TwitterProvider implements ProviderInterface
    {
        /**
         * @var \Abraham\TwitterOAuth\TwitterOAuth
         */
        private $twitterProvider;

        /**
         * @var int
         */
        private $amount;

        /**
         * @var string
         */
        private $type;

        /**
         * TwitterProvider constructor.
         *
         * @param $settings
         *
         * @throws \iiiicaro\SentimentThermometer\Providers\Exceptions\InvalidTwitterConfiguration
         */
        public function __construct($settings)
        {
            if (empty($settings['twitter']))
            {
                throw new InvalidTwitterConfiguration('Twitter settings not found.');
            }

            $settings = $settings['twitter'];

            $twitterValidator = new TwitterValidator($settings);

            if ($twitterValidator instanceof \Exception)
            {
                throw new InvalidTwitterConfiguration($twitterValidator->getMessage());
            }

            $this->twitterProvider = new TwitterOAuth($settings['consumer_key'], $settings['consumer_secret']);

            $this->amount = isset($settings['count']) ? $settings['count'] : 50;
            $this->type   = isset($settings['type']) ? $settings['type'] : 'recent';
        }

        /**
         * @param $keyword
         *
         * @return array
         */
        public function getByKeyword($keyword)
        {
            $results = $this->twitterProvider->get("search/tweets", [
                "q"           => $keyword,
                "result_type" => $this->type,
                "count"       => $this->amount,
            ]);

            return $this->processResults($results);
        }

        /**
         * @param $results
         *
         * @return array
         * @throws \iiiicaro\SentimentThermometer\Providers\Exceptions\ErrorFetchingTwitter
         */
        private function processResults($results)
        {
            if (!empty($results->errors))
            {
                throw new ErrorFetchingTwitter();
            }

            $response = [];

            foreach ($results->statuses as $tweet)
            {
                $response[] = $tweet->text;
            }

            return $response;
        }
    }