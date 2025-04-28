<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class SentimentAnalyzer
{
    private $client;
    private $apiKey;

    public function __construct(HttpClientInterface $client, string $apiKey)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }

    /**
     * Analyze the sentiment of a text using Twinword API.
     * Returns 'positive', 'neutral', or 'negative'.
     */
    public function analyze(string $text): ?string
    {
        $response = $this->client->request('POST', 'https://api.twinword.com/api/v7/sentiment/', [
            'headers' => [
                'X-Twaip-Key' => $this->apiKey,
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'body' => [
                'text' => $text,
            ],
        ]);

        if ($response->getStatusCode() !== 200) {
            return null;
        }

        $data = $response->toArray();
        return $data['type'] ?? null; // 'positive', 'neutral', 'negative'
    }
}