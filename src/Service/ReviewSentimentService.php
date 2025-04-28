<?php

namespace App\Service;

class ReviewSentimentService
{
    public function analyze(string $text): string
    {
        // Use Hugging Face Inference API for sentiment analysis
        $apiKey = $_ENV['HUGGINGFACE_API_TOKEN'] ?? null;
        $endpoint = 'https://api-inference.huggingface.co/models/distilbert-base-uncased-finetuned-sst-2-english';
        $headers = [
            'Content-Type: application/json',
        ];
        if ($apiKey) {
            $headers[] = 'Authorization: Bearer ' . $apiKey;
        }
        $data = json_encode(['inputs' => $text]);
        $ch = curl_init($endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($response && $httpCode === 200) {
            $result = json_decode($response, true);
            if (isset($result[0][0]['label'])) {
                $label = strtolower($result[0][0]['label']);
                if ($label === 'positive') return 'positive';
                if ($label === 'negative') return 'negative';
            } elseif (isset($result[0]['label'])) {
                $label = strtolower($result[0]['label']);
                if ($label === 'positive') return 'positive';
                if ($label === 'negative') return 'negative';
            } elseif (isset($result['error'])) {
                // Log error for debugging
                error_log('Hugging Face API error: ' . $result['error']);
            } elseif (isset($result['error_message'])) {
                // Log error for debugging
                error_log('Hugging Face API error: ' . $result['error_message']);
            } else {
                // Log unexpected response for debugging
                error_log('Unexpected Hugging Face API response: ' . json_encode($result));
            }
        } else {
            // Log API failure for debugging
            error_log('Hugging Face API failed with status code ' . $httpCode);
        }
        // Fallback to dummy logic if API fails or returns unexpected data
        $text = strtolower($text);
        if (strpos($text, 'good') !== false || strpos($text, 'excellent') !== false || strpos($text, 'great') !== false) {
            return 'positive';
        }
        if (strpos($text, 'bad') !== false || strpos($text, 'terrible') !== false || strpos($text, 'poor') !== false) {
            return 'negative';
        }
        return 'neutral';
    }

    public function analyzeSentiment(string $text): int
    {
        $sentiment = $this->analyze($text);
        switch ($sentiment) {
            case 'positive': return 5;
            case 'negative': return 1;
            default: return 3;
        }
    }

    public function ratingToSentiment(int $stars): string
    {
        if ($stars >= 4) return 'positive';
        if ($stars == 3) return 'neutral';
        return 'negative';
    }
}
