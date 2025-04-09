<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccueilController extends AbstractController{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/table', name: 'app_table')]
    public function table(): Response
    {
        return $this->render('table.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/card', name: 'app_card')]
    public function card(): Response
    {
        return $this->render('cards.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
    #[Route('/form', name: 'app_form')]
    public function form(): Response
    {
        return $this->render('form.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
}
