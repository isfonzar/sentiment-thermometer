<?php

    namespace iiiicaro\SentimentThermometer\Providers\Sentiment;

    interface SentimentProviderInterface
    {
        public function score($sentence);
    }