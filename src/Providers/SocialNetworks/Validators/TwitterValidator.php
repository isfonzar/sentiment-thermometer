<?php

    namespace iiiicaro\SentimentThermometer\Providers\SocialNetworks\Validators;

    use iiiicaro\SentimentThermometer\Providers\Exceptions\InvalidTwitterConfiguration;

    class TwitterValidator
    {
        /**
         * TwitterValidator constructor.
         *
         * @param $settings
         *
         * @throws \iiiicaro\SentimentThermometer\Providers\Exceptions\InvalidTwitterConfiguration
         */
        public function __construct($settings)
        {
            if (empty($settings))
            {
                throw new InvalidTwitterConfiguration('Twitter settings missing.');
            }

            if (!$this->validateConsumerKey($settings))
            {
                throw new InvalidTwitterConfiguration('Twitter consumer key missing.');
            }

            if (!$this->validateConsumerSecret($settings))
            {
                throw new InvalidTwitterConfiguration('Twitter consumer secret missing.');
            }
        }

        /**
         * @param $settings
         *
         * @return bool
         */
        private function validateConsumerKey($settings)
        {
            if (empty($settings['consumer_key']))
            {
                return false;
            }

            return true;
        }

        /**
         * @param $settings
         *
         * @return bool
         */
        private function validateConsumerSecret($settings)
        {
            if (empty($settings['consumer_key']))
            {
                return false;
            }

            return true;
        }
    }