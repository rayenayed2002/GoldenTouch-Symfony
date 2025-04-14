<?php

namespace App\Service;

use Twilio\Rest\Client;

class TwilioSmsService
{
    private Client $client;
    private string $fromNumber;
    private string $toNumber;

    public function __construct(
        string $accountSid,
        string $authToken,
        string $fromNumber,
        string $toNumber
    ) {
        $this->client = new Client($accountSid, $authToken);
        $this->fromNumber = $fromNumber;
        $this->toNumber = $toNumber;
    }

    public function sendSms(string $message): bool
    {
        try {
            $this->client->messages->create(
                $this->toNumber,
                [
                    'from' => $this->fromNumber,
                    'body' => $message,
                ]
            );
            return true;
        } catch (\Exception $e) {
            // Log l'erreur (ex: avec Monolog)
            error_log("Twilio SMS Error: " . $e->getMessage());
            return false;
        }
    }
}