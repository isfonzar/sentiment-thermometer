<?php

    namespace iiiicaro\SentimentThermometer\Providers\SocialNetworks;

    interface ProviderInterface
    {
        public function getByKeyword($keyword);
    }