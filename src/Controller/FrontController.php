<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/en', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

   
   

}
