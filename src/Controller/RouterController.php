<?php

// src/Controller/RouterController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request; // Add this line
use App\Form\EventType; // Make sure this exists
use App\Entity\Event;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\EntityManagerInterface; // Add this if using Doctrine directly

class RouterController extends AbstractController
{
  /**
 * @Route("/{page}", name="dynamic_route", requirements={"page"=".+"}, defaults={"page"="home"})
 */
    public function handleAllPages(string $page): Response
    {
        // Custom mapping for specific pages
        $templateMap = [
            'ajouter-evenement' => 'GestionEvent/AddEvent.html.twig',
            // Add other custom paths here...
        ];
    
        // Use mapped template if exists, otherwise default to "pages/"
        $templatePath = $templateMap[$page] ?? "pages/{$page}.html.twig";
    
        if (!$this->get('twig')->getLoader()->exists($templatePath)) {
            throw $this->createNotFoundException("Page not found: $page");
        }
    
        return $this->render($templatePath);
    }



}