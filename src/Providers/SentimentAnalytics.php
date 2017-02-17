<?php

    namespace iiiicaro\SentimentThermometer\Providers;

    use iiiicaro\SentimentThermometer\Providers\Sentiment\SentimentProviderInterface;
    use iiiicaro\SentimentThermometer\Providers\DataModels\SentimentResponse;

    class SentimentAnalytics
    {
        /**
         * @var \PHPInsight\Sentiment
         */
        private $sentimentProvider;

        /**
         * SentimentAnalytics constructor.
         *
         * @param \iiiicaro\SentimentThermometer\Providers\Sentiment\SentimentProviderInterface $sentimentProvider
         */
        public function __construct(SentimentProviderInterface $sentimentProvider)
        {
            $this->sentimentProvider = $sentimentProvider;
        }

        /**
         * @param $results
         *
         * @return \iiiicaro\SentimentThermometer\Providers\DataModels\SentimentResponse
         */
        public function analyze($results)
        {
            $sentimentResponse = new SentimentResponse();

            if (empty($results))
            {
                return $sentimentResponse;
            }

            foreach ($results as $sentence)
            {
                $sentenceAnalysis = $this->sentimentProvider->score($sentence);

                $sentimentResponse
                    ->sumPositive($sentenceAnalysis['pos'])
                    ->sumNegative($sentenceAnalysis['neg'])
                    ->sumNeutral($sentenceAnalysis['neu']);
            }

            $sentimentResponse->divideAllFields(count($results));

            return $sentimentResponse;
        }
    }