<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GrammarCorrectionService
{
    private $client;
    private $apiToken;

    public function __construct(HttpClientInterface $client, string $apiToken)
    {
        $this->client = $client;
        $this->apiToken = $apiToken;
    }

    /**
     * Corrects grammar using Hugging Face vennify/t5-base-grammar-correction
     */
    public function correct(string $text): ?string
    {
        $url = 'https://api-inference.huggingface.co/models/vennify/t5-base-grammar-correction';
        
        try {
            $response = $this->client->request('POST', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiToken,
                    'Content-Type' => 'application/json',
                ],
                'json' => ['inputs' => $text],
            ]);

            $data = $response->toArray(false);
            
            if (isset($data[0]['generated_text'])) {
                return $data[0]['generated_text'];
            }
            
            // If API returns error structure
            if (isset($data['error'])) {
                // Optionally log: $data['error']
                return $this->applyBasicLocalCorrections($text);
            }
        } catch (\Throwable $e) {
            // Optionally log: $e->getMessage()
            return $this->applyBasicLocalCorrections($text);
        }
        
        return $this->applyBasicLocalCorrections($text);
    }

    private function applyBasicLocalCorrections(string $text): string
    {
        // Basic grammar corrections when API fails
        $text = preg_replace('/\s+/', ' ', trim($text));
        $text = preg_replace_callback('/(^|[.!?]\s+)([a-z])/', function ($m) {
            return $m[1] . strtoupper($m[2]);
        }, $text);
        
        if ($text && !preg_match('/[.!?]$/', $text)) {
            $text .= '.';
        }
        
        return $text;
    }
}