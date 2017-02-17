<p align="center"><img src="https://cdn.rawgit.com/iiiicaro/SentimentThermometer/30d2ae28/logo.png"></p>

<p align="center">
<a href="https://packagist.org/packages/iiiicaro/sentiment-thermometer"><img src="https://img.shields.io/badge/Language-PHP-brightgreen.svg" alt="Language"></a>
<a href="https://packagist.org/packages/iiiicaro/sentiment-thermometer"><img src="https://img.shields.io/badge/License-MIT-blue.svg" alt="License"></a>
<a href="https://packagist.org/packages/iiiicaro/sentiment-thermometer"><img src="https://img.shields.io/badge/Version-1.0-brightgreen.svg" alt="Latest Stable Version"></a>
</p>

## About Sentiment Thermometer
Sentiment Thermometer is a library and tool to measure the sentiment around a word, name, sentence or hashtag using social networks.

## Features

- Fully integrated with twitter feed
- Positive/negative/neutral analysis
- EASY to incorporate on your projects
- CUSTOMIZE to your needs
- STUPIDLY [EASY TO USE](https://github.com/iiiicaro/SentimentThermometer#usage)
- Very fast start up and response time

## Installation

### Composer

```bash
$ composer require iiiicaro/sentiment-thermometer 
```

## Usage

### Basic usage

```
<?php

    require(__DIR__ . '/../vendor/autoload.php');

    use iiiicaro\SentimentThermometer\SentimentThermometer;

    $config = [
        'twitter' => [
            'consumer_key' => 'CONSUMER_KEY_HERE',
            'consumer_secret' => 'CONSUMER_SECRET_HERE',
        ]
    ];

    $sentimentThermometer = new SentimentThermometer($config);
    $thermomether = $sentimentThermometer->get('Donald Trump');
    
    print_r($thermomether);
```
