<?php
// src/Service/PdfGenerator.php

namespace App\Service;

use Knp\Snappy\Pdf;
use Twig\Environment;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class PdfGenerator
{
    private $pdf;
    private $twig;
    private $params;

    public function __construct(Pdf $pdf, Environment $twig, ParameterBagInterface $params)
    {
        $this->pdf = $pdf;
        $this->twig = $twig;
        $this->params = $params;
    }

    public function generatePersonnelPdf(array $personnels): string
    {
        // Vérifier que les images existent
        foreach ($personnels as $personnel) {
            $imagePath = $this->params->get('kernel.project_dir').'/public/uploads/personnel/'.$personnel->getImageUrl();
            if (!file_exists($imagePath)) {
                $personnel->setImageUrl('default-personnel.jpg');
            }
        }

        $html = $this->twig->render('perso/export_pdf.html.twig', [
            'personnels' => $personnels,
            'date' => new \DateTime()
        ]);

        return $this->pdf->getOutputFromHtml($html, [
            'encoding' => 'utf-8',
            'enable-local-file-access' => true,
            'images' => true,
            'javascript-delay' => 1000,
            'no-stop-slow-scripts' => true,
            'page-size' => 'A4',
            'margin-top' => '10mm',
            'margin-right' => '10mm',
            'margin-bottom' => '10mm',
            'margin-left' => '10mm',
            'dpi' => 300,
            'image-quality' => 100
        ]);
    }
}