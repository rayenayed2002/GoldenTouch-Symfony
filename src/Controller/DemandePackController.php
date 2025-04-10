<?php

namespace App\Controller;

use App\Entity\DemandePack;
use App\Entity\Pack;
use App\Entity\Utilisateur;
use App\Entity\Event;
use App\Entity\NotificationsAdmin;
use App\Repository\DemandePackRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/demande-pack')]
class DemandePackController extends AbstractController
{
    public function __construct(
        private DemandePackRepository $demandePackRepository,
        private EntityManagerInterface $entityManager,
        private UtilisateurRepository $utilisateurRepository
    ) {}
}
