<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CVAnalysisController extends AbstractController
{
#[Route('/analyse-cv', name: 'app_analyse_cv', methods: ['POST'])]
    public function analyseCV(Request $request): JsonResponse
    {
        $file = $request->files->get('cv');
        
        if (!$file) {
            return $this->json(['success' => false, 'message' => 'Aucun fichier fourni']);
        }
    
        $allowedMimeTypes = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        if (!in_array($file->getMimeType(), $allowedMimeTypes)) {
            return $this->json(['success' => false, 'message' => 'Format de fichier non supporté']);
        }
    
        try {
            $extractionResult = $this->extractDataFromCV($file);
            $text = $extractionResult['text'];
            $image = $extractionResult['image'] ?? null;
            
            $data = $this->analyseCVText($text);
            
            // Gestion de l'image
            $imageData = null;
            if ($image) {
                $imageData = [
                    'content' => base64_encode($image),
                    'mime_type' => $this->detectImageMimeType($image),
                    'filename' => 'photo_cv_' . uniqid() . '.jpg'
                ];
            }
            
            return $this->json([
                'success' => true,
                'nom' => $data['nom'] ?? null,
                'prenom' => $data['prenom'] ?? null,
                'service' => $data['service'] ?? null,
                'description' => $data['description'] ?? null,
                'image' => $imageData,
                'image_found' => $image !== null
            ]);
            
        } catch (\Exception $e) {
            return $this->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
    private function detectImageMimeType($imageContent): string
    {
        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        return $finfo->buffer($imageContent);
    }

    private function extractDataFromCV($file): array
    {
        $mimeType = $file->getMimeType();
        $tempPath = $file->getRealPath();
        $result = ['text' => '', 'image' => null];

        if ($mimeType === 'application/pdf') {
            // Extraction PDF avec images
            $parser = new \Smalot\PdfParser\Parser();
            $pdf = $parser->parseFile($tempPath);
            $result['text'] = $pdf->getText();
            
            // Extraction de la première image
            $pages = $pdf->getPages();
            foreach ($pages as $page) {
                $details = $page->getDetails();
                if (isset($details['XObject'])) {
                    foreach ($details['XObject'] as $xObject) {
                        if ($xObject instanceof \Smalot\PdfParser\XObject\Image) {
                            $result['image'] = $xObject->getContent();
                            break 2; // On prend la première image trouvée
                        }
                    }
                }
            }
        } else {
            // Extraction DOCX avec images
            $phpWord = \PhpOffice\PhpWord\IOFactory::load($tempPath);
            $result['text'] = $this->extractTextFromPhpWord($phpWord);
            $result['image'] = $this->extractImageFromPhpWord($phpWord);
        }

        return $result;
    }

    private function extractTextFromPhpWord($phpWord): string
    {
        $text = '';
        foreach ($phpWord->getSections() as $section) {
            foreach ($section->getElements() as $element) {
                if ($element instanceof \PhpOffice\PhpWord\Element\TextRun) {
                    foreach ($element->getElements() as $textElement) {
                        if ($textElement instanceof \PhpOffice\PhpWord\Element\Text) {
                            $text .= $textElement->getText() . ' ';
                        }
                    }
                }
            }
        }
        return $text;
    }

    private function extractImageFromPhpWord($phpWord): ?string
    {
        $imagesDir = $this->getParameter('kernel.project_dir').'/public/uploads/images/';
        if (!file_exists($imagesDir)) {
            mkdir($imagesDir, 0777, true);
        }
    
        foreach ($phpWord->getSections() as $section) {
            foreach ($section->getElements() as $element) {
                if ($element instanceof \PhpOffice\PhpWord\Element\Image) {
                    $imagePath = $imagesDir . uniqid() . '.jpg';
                    file_put_contents($imagePath, file_get_contents($element->getSource()));
                    return file_get_contents($imagePath);
                }
                
                if ($element instanceof \PhpOffice\PhpWord\Element\TextRun) {
                    foreach ($element->getElements() as $textElement) {
                        if ($textElement instanceof \PhpOffice\PhpWord\Element\Image) {
                            $imagePath = $imagesDir . uniqid() . '.jpg';
                            file_put_contents($imagePath, file_get_contents($textElement->getSource()));
                            return file_get_contents($imagePath);
                        }
                    }
                }
            }
        }
        return null;
    }

    private function analyseCVText(string $text): array
    {
        $result = [];
        
        // Détection nom et prénom
        if (preg_match('/([A-Z][a-z]+)\s+([A-Z][a-z]+)/', $text, $matches)) {
            $result['prenom'] = $matches[1];
            $result['nom'] = $matches[2];
        }
        
        // Détection service
        $services = ['Décorateur', 'Traiteur', 'Animateur', 'Sécurité', 'Vidéaste', 'Serveur', 'Fleuriste'];
        foreach ($services as $service) {
            if (stripos($text, $service) !== false) {
                $result['service'] = $service;
                break;
            }
        }
        
        // Extraction description
        if (preg_match('/description:\s*(.+?)(?=\n\w+:|$)/is', $text, $matches)) {
            $result['description'] = trim($matches[1]);
        } else {
            $lines = explode("\n", $text);
            $result['description'] = implode("\n", array_slice($lines, 0, 5));
        }
        
        return $result;
    }
}