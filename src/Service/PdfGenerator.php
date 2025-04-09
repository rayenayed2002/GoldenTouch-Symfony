<?php

namespace App\Service;

use Knp\Snappy\Pdf;
use Twig\Environment;

class PdfGenerator
{
    public function __construct(
        private Pdf $pdf,
        private Environment $twig
    ) {}

    public function generatePersonnelListPdf(array $personnels): string
    {
        $html = $this->twig->render('perso/export_pdf.html.twig', [
            'personnels' => $personnels,
            'date' => new \DateTime()
        ]);

        return $this->pdf->getOutputFromHtml($html, [
            'orientation' => 'Portrait',
            'margin-top' => '15mm',
            'margin-bottom' => '15mm',
            'margin-left' => '10mm',
            'margin-right' => '10mm',
            'encoding' => 'utf-8',
            'enable-local-file-access' => true // Permet l'accès aux fichiers locaux comme les images
        ]);
    }
}