<?php

namespace App\Service;

use Google\Client ;  // This is the correct import
use Google\Service\Calendar;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class GoogleCalendarService
{
    private Client $client;
    
    public function __construct(
        private string $googleClientId,
        private string $googleClientSecret,
        private string $googleRedirectUri,
        private UrlGeneratorInterface $urlGenerator
    ) {
        $this->client = new Client();
        $this->client->setClientId($this->googleClientId);
        $this->client->setClientSecret($this->googleClientSecret);
        $this->client->setRedirectUri($this->googleRedirectUri);
        $this->client->addScope(Calendar::CALENDAR);
        $this->client->setAccessType('offline');
        $this->client->setPrompt('select_account consent');
    }

    public function getAuthUrl(): string
    {
        return $this->client->createAuthUrl();
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    // Dans App\Service\GoogleCalendarService



// Dans GoogleCalendarService
public function addEventToCalendar(array $eventData, array $accessToken, array $personnelList = []): \Google\Service\Calendar\Event
{
    try {
        $this->client->setAccessToken($accessToken);
        
        if ($this->client->isAccessTokenExpired()) {
            $refreshToken = $this->client->getRefreshToken();
            if (!$refreshToken) {
                throw new \RuntimeException('No refresh token available');
            }
            $this->client->fetchAccessTokenWithRefreshToken($refreshToken);
        }
        
        $calendarService = new Calendar($this->client);
        
        // Recherche plus robuste de l'événement existant
        $events = $calendarService->events->listEvents('primary', [
            'q' => $eventData['nom'],
            'timeMin' => (new \DateTime())->sub(new \DateInterval('P1Y'))->format(\DateTime::RFC3339),
            'timeMax' => (new \DateTime())->add(new \DateInterval('P1Y'))->format(\DateTime::RFC3339),
            'maxResults' => 10,
            'singleEvents' => true,
            'orderBy' => 'startTime'
        ]);
        
        $googleEvent = new Calendar\Event();
        $eventExists = false;
        
        foreach ($events->getItems() as $existingEvent) {
            // Vérification plus précise de la correspondance
            if ($this->eventsMatch($existingEvent, $eventData)) {
                $googleEvent = $existingEvent;
                $eventExists = true;
                break;
            }
        }
        
        // Configuration de l'événement
        $googleEvent->setSummary($eventData['nom']);
        
        $start = new Calendar\EventDateTime();
        $start->setDateTime($eventData['date']->format('Y-m-d\TH:i:sP'));
        $googleEvent->setStart($start);
        
        $end = new Calendar\EventDateTime();
        $endDateTime = clone $eventData['date'];
        $end->setDateTime($endDateTime->modify('+1 hour')->format('Y-m-d\TH:i:sP'));
        $googleEvent->setEnd($end);
        
        $description = $eventData['description'] ?? '';
        if (!empty($personnelList)) {
            $description .= "\n\nPersonnel réservé:\n";
            foreach ($personnelList as $personnel) {
                $description .= "- " . $personnel['nomP'] . " " . $personnel['prenomP'] . "\n";
            }
        }
        $googleEvent->setDescription($description);
        
        if ($eventExists) {
            return $calendarService->events->update('primary', $googleEvent->getId(), $googleEvent);
        } else {
            return $calendarService->events->insert('primary', $googleEvent);
        }
        
    } catch (\Exception $e) {
        error_log('Google Calendar Error: '.$e->getMessage());
        throw $e;
    }
}

private function eventsMatch(\Google\Service\Calendar\Event $googleEvent, array $eventData): bool
{
    $googleStart = $googleEvent->getStart()->getDateTime();
    $ourStart = $eventData['date']->format('Y-m-d\TH:i:sP');
    
    return $googleEvent->getSummary() === $eventData['nom'] 
        && $googleStart === $ourStart;
}
}