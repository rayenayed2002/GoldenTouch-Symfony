<?php

namespace App\Service;

use App\Entity\NotificationAdmin;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class NotificationService
{
    private $entityManager;
    private $security;

    public function __construct(
        EntityManagerInterface $entityManager,
        Security $security
    ) {
        $this->entityManager = $entityManager;
        $this->security = $security;
    }

    public function createNotification(
        int $userId,
        string $message,
        int $demandePackId,
        string $type = 'PACK_CUSTOMIZATION'
    ): NotificationAdmin {
        $notification = new NotificationAdmin();
        $notification->setUtilisateurId($userId);
        $notification->setMessage($message);
        $notification->setDemandePackId($demandePackId);
        $notification->setType($type);
        $notification->setDateCreation(new \DateTime());
        $notification->setStatut('NON_LU');

        $this->entityManager->persist($notification);
        $this->entityManager->flush();

        return $notification;
    }

    public function createPackCustomizationNotifications(int $clientId, int $demandePackId): void
    {
        // Notify client
        $this->createNotification(
            $clientId,
            'Your pack has been customized and is waiting for your confirmation',
            $demandePackId
        );

        // Notify admin
        $this->createNotification(
            $this->security->getUser()->getId(),
            'Pack customization completed for demand #' . $demandePackId,
            $demandePackId,
            'ADMIN_NOTIFICATION'
        );
    }

    public function markAsRead(NotificationAdmin $notification): void
    {
        $notification->setStatut('LU');
        $this->entityManager->flush();
    }
}