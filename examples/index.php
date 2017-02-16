<?php

    require(__DIR__ . '/../vendor/autoload.php');

    use iiiicaro\BuzzTracker\BuzzTracker;

    $twitterSentimentAnalytics = new BuzzTracker();

    $twitterSentimentAnalytics->get('');