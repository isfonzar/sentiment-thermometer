<?php

    require(__DIR__ . '/../vendor/autoload.php');

    use Icaro\TwitterSentimentAnalytics\TwitterSentimentAnalytics;

    $twitterSentimentAnalytics = new TwitterSentimentAnalytics();

    $twitterSentimentAnalytics->get('');