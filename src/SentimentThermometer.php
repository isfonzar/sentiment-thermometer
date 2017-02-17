<?php

    namespace iiiicaro\SentimentThermometer;

    use iiiicaro\SentimentThermometer\Providers\Sentiment\SentimentProvider;
    use iiiicaro\SentimentThermometer\Providers\SentimentAnalytics;
    use iiiicaro\SentimentThermometer\Providers\SocialNetwork;
    use iiiicaro\SentimentThermometer\Providers\SocialNetworks\TwitterProvider;

    class SentimentThermometer
    {
        /**
         * @var \iiiicaro\SentimentThermometer\Providers\SocialNetwork
         */
        private $socialNetwork;

        /**
         * @var \iiiicaro\SentimentThermometer\Providers\SentimentAnalytics
         */
        private $sentimentAnalytics;

        /**
         * SentimentThermometer constructor.
         *
         * @param array $settings
         */
        public function __construct($settings)
        {
            $this->socialNetwork = new SocialNetwork($settings);
            $this->socialNetwork->setTwitter(new TwitterProvider($settings));

            $this->sentimentAnalytics = new SentimentAnalytics(new SentimentProvider());
        }

        /**
         * @param $keyword
         *
         * @return \iiiicaro\SentimentThermometer\Providers\DataModels\SentimentResponse
         */
        public function get($keyword)
        {
            $results = $this->socialNetwork->get($keyword);

            $results = $this->sentimentAnalytics->analyze($results);

            return $results;
        }
    }