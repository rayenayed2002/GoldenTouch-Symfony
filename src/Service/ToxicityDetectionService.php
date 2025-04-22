<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ToxicityDetectionService
{
    private $client;
    private $apiToken;

    public function __construct(HttpClientInterface $client, string $apiToken)
    {
        $this->client = $client;
        $this->apiToken = $apiToken;
    }

    /**
     * Workflow:
     * 1. Translate French → English using Helsinki-NLP/opus-mt-fr-en
     * 2. Run toxicity detection on both original (French) and translated (English) using unitary/toxic-bert
     * 3. Return both results
     */
    public function detect(string $text): array
    {
        $results = [
            'fr' => [],
            'en' => [],
            'translation' => null
        ];
        // 1. Detect toxicity in French
        $results['fr'] = $this->detectToxicityBert($text);

        // 2. Translate to English
        $translation = $this->translateFrToEn($text);
        $results['translation'] = $translation;
        if ($translation) {
            // 3. Detect toxicity in English
            $results['en'] = $this->detectToxicityBert($translation);
        }
        return $results;
    }

    /**
     * Calls Hugging Face unitary/toxic-bert for toxicity detection
     */
    private function detectToxicityBert(string $text): array
    {
        $url = 'https://api-inference.huggingface.co/models/unitary/toxic-bert';
        try {
            $response = $this->client->request('POST', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiToken,
                    'Content-Type' => 'application/json',
                ],
                'json' => ['inputs' => $text],
            ]);
            $data = $response->toArray(false);
            if (isset($data[0])) {
                return $data[0];
            }
        } catch (\Throwable $e) {
            // Optionally log: $e->getMessage()
        }
        return [];
    }

    /**
     * Translates French text to English using Helsinki-NLP/opus-mt-fr-en
     */
    private function translateFrToEn(string $text): ?string
    {
        $url = 'https://api-inference.huggingface.co/models/Helsinki-NLP/opus-mt-fr-en';
        try {
            $response = $this->client->request('POST', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiToken,
                    'Content-Type' => 'application/json',
                ],
                'json' => ['inputs' => $text],
            ]);
            $data = $response->toArray(false);
            if (isset($data[0]['translation_text'])) {
                return $data[0]['translation_text'];
            }
        } catch (\Throwable $e) {
            // Optionally log: $e->getMessage()
        }
        return null;
    }

    /**
     * Masks toxic words in the text (simple implementation, can be improved)
     */
    public function maskToxicWords(string $text, array $labels): string
    {
        // For demo: just replace the whole text if toxic; refine for real masking
        foreach ($labels as $label) {
            if ($label['score'] > 0.5 && $label['label'] === 'toxic') {
                return '[mot inapproprié]';
            }
        }
        return $text;
    }
}
