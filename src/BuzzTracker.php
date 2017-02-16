<?php

    namespace iiiicaro\BuzzTracker;

    use PHPInsight\Sentiment;

    class BuzzTracker
    {
        private $sentimentAnalytics;

        private $interval;

        public function __construct()
        {
            $this->sentimentAnalytics = new Sentiment();
        }

        public function get($keyword)
        {
            $result = $this->sentimentAnalytics->score($keyword);
            var_dump($result); exit;
        }

        public function setInterval($interval)
        {
            $this->interval = $interval;
        }
    }