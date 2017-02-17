<?php

    namespace iiiicaro\SentimentThermometer\Providers\Sentiment;

    use PHPInsight\Sentiment;

    class SentimentProvider implements SentimentProviderInterface
    {
        /**
         * @var \PHPInsight\Sentiment
         */
        private $sentiment;

        /**
         * SentimentProvider constructor.
         */
        public function __construct()
        {
            $this->sentiment = new Sentiment();
        }

        /**
         * @param $sentence
         *
         * @return int
         */
        public function score($sentence)
        {
            return $this->sentiment->score($sentence);
        }
    }