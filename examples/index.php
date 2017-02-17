<?php

    require(__DIR__ . '/../vendor/autoload.php');

    use iiiicaro\SentimentThermometer\SentimentThermometer;

    $config = [
        'twitter' => [
            'consumer_key' => 'CONSUMER_KEY_HERE',
            'consumer_secret' => 'CONSUMER_SECRET_HERE',
            'type' => 'recent',
            'count' => '100'
        ]
    ];

    $sentimentThermometer = new SentimentThermometer($config);

    $thermomether = $sentimentThermometer->get('Donald Trump');

    print_r($thermomether);