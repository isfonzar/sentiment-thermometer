<?php

    namespace iiiicaro\SentimentThermometer\Providers\Exceptions;

    abstract class DefaultException extends \Exception
    {
        /**
         * @var null|string
         */
        public $message;

        /**
         * ErrorFetchingTwitter constructor.
         *
         * @param null|string $message
         */
        public function __construct($message = null)
        {
            $this->message = $message;
        }
    }