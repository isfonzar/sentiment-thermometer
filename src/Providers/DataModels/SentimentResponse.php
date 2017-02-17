<?php

    namespace iiiicaro\SentimentThermometer\Providers\DataModels;

    class SentimentResponse
    {
        /**
         * @var float
         */
        public $positive = 0.0;

        /**
         * @var float
         */
        public $negative = 0.0;

        /**
         * @var float
         */
        public $neutral = 0.0;

        /**
         * @param float $positive
         *
         * @return SentimentResponse
         */
        public function sumPositive($positive)
        {
            $this->positive += $positive;

            return $this;
        }

        /**
         * @param float $negative
         *
         * @return SentimentResponse
         */
        public function sumNegative($negative)
        {
            $this->negative += $negative;

            return $this;
        }

        /**
         * @param float $neutral
         *
         * @return SentimentResponse
         */
        public function sumNeutral($neutral)
        {
            $this->neutral += $neutral;

            return $this;
        }

        /**
         * @param int $divisor
         *
         * @return SentimentResponse
         */
        public function divideAllFields($divisor)
        {
            $this->positive = $this->positive / $divisor;
            $this->negative = $this->negative / $divisor;
            $this->neutral = $this->neutral / $divisor;

            return $this;
        }
    }