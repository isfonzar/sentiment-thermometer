<?php

    namespace iiiicaro\SentimentThermometer\Providers;

    use iiiicaro\SentimentThermometer\Providers\SocialNetworks\ProviderInterface;
    use iiiicaro\SentimentThermometer\Providers\SocialNetworks\TwitterProvider;

    class SocialNetwork
    {
        /**
         * @var null|TwitterProvider
         */
        private $twitterProvider;

        /**
         * @var array
         */
        private $settings;

        /**
         * SocialNetwork constructor.
         *
         * @param array $settings
         */
        public function __construct($settings)
        {
            $this->settings = $settings;
        }

        /**
         * @param $keyword
         *
         * @return array
         */
        public function get($keyword)
        {
            $response = [];

            if (!empty($this->twitterProvider))
            {
                $results = $this->twitterProvider->getByKeyword($keyword);

                $response = array_merge($response, $results);
            }

            return $response;
        }

        /**
         * @param \iiiicaro\SentimentThermometer\Providers\SocialNetworks\ProviderInterface $twitterProvider
         */
        public function setTwitter(ProviderInterface $twitterProvider)
        {
            $this->twitterProvider = $twitterProvider;
        }
    }