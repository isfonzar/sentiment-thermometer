<p align="center"><img src="https://cdn.rawgit.com/iiiicaro/sentiment-thermometer/30e4f410/logo.png"></p>

<p align="center">
<a href="https://packagist.org/packages/iiiicaro/sentiment-thermometer"><img src="https://img.shields.io/badge/Language-PHP-brightgreen.svg" alt="Language"></a>
<a href="https://packagist.org/packages/iiiicaro/sentiment-thermometer"><img src="https://img.shields.io/badge/License-MIT-blue.svg" alt="License"></a>
<a href="https://packagist.org/packages/iiiicaro/sentiment-thermometer"><img src="https://img.shields.io/badge/Version-1.0-brightgreen.svg" alt="Latest Stable Version"></a>
</p>

## About Sentiment Thermometer
Sentiment Thermometer is a library and tool to measure the sentiment around a word, name, sentence or hashtag using social networks.

![](http://i.imgur.com/UZyHxN1.gif)

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

## Contributing

### Bug Reports & Feature Requests

Please use the [issue tracker](https://github.com/iiiicaro/sentiment-thermometer/issues) to report any bugs or feature requests.

## Social Coding

1. Create an issue to discuss about your idea
2. [Fork it] (https://github.com/iiiicaro/sentiment-thermometer/fork)
3. Create your feature branch (`git checkout -b my-new-feature`)
4. Commit your changes (`git commit -am 'Add some feature'`)
5. Push to the branch (`git push origin my-new-feature`)
6. Create a new Pull Request
7. Profit! :white_check_mark:
