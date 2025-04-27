<?php

namespace App\Controller;


use App\Form\PersonnelType;
use App\Entity\ReservationPerso;
use App\Entity\Event;
use App\Entity\Personnel;
use App\Repository\UtilisateurRepository; 
use App\Service\PdfGenerator;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Repository\PersonnelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[Route('/perso')]
final class PersoController extends AbstractController
{
    #[Route(name: 'app_perso_index', methods: ['GET'])]
    public function index(
        Request $request, 
        PersonnelRepository $personnelRepository,
        PaginatorInterface $paginator
    ): Response {
        // Récupérer les paramètres
        $statut = $request->query->get('statut');
        $service = $request->query->get('service');
        $sort = $request->query->get('sort');
        $order = $request->query->get('order', 'ASC');
        
        // Récupérer les top 3 personnels avec le plus de réservations
        $topPersonnels = $personnelRepository->findTopReservedPersonnels();
        $topPersonnelIds = array_map(function($item) {
            return $item['personnel']->getIdP();
        }, $topPersonnels);
        
        // Récupérer tous les personnels avec les tops en premier
        $query = $personnelRepository->findAllWithTopFirst($topPersonnelIds, $statut, $service, $sort, $order);
        
        // Pagination avec 6 éléments par page
        $personnels = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            6
        );
    
        return $this->render('perso/index.html.twig', [
            'personnels' => $personnels,
            'topPersonnelIds' => $topPersonnelIds,
        ]);
    }

    #[Route('/new', name: 'app_perso_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger, PersonnelRepository $personnelRepository): Response
    {
        $personnel = new Personnel();
        $form = $this->createForm(PersonnelType::class, $personnel);
        $form->handleRequest($request);
    
        if ($form->isSubmitted()) {
            if ($personnelRepository->personnelExists($personnel)) {
                $this->addFlash('error', 'Un personnel avec le même nom, prénom et service existe déjà.');
            } elseif ($form->isValid()) {
                /** @var UploadedFile $imageFile */
                $imageFile = $form->get('imageFile')->getData();
                
                if ($imageFile) {
                    $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
    
                    try {
                        $imageFile->move(
                            $this->getParameter('personnel_images_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        $this->addFlash('warning', 'Une erreur est survenue lors du téléchargement de l\'image.');
                    }
    
                    $personnel->setImageUrl($newFilename);
                }
    
                $entityManager->persist($personnel);
                $entityManager->flush();
                
                $this->addFlash('success', 'Le personnel a été créé avec succès.');
    
                return $this->redirectToRoute('app_perso_index', [], Response::HTTP_SEE_OTHER);
            }
        }
    
        return $this->render('perso/new.html.twig', [
            'personnel' => $personnel,
            'form' => $form->createView(),
            'app_name' => 'GoldenTouch'
        ]);
    }
    

    #[Route('/{idP}/edit', name: 'app_perso_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request, 
        Personnel $personnel, 
        EntityManagerInterface $entityManager, 
        SluggerInterface $slugger,
        PersonnelRepository $personnelRepository
    ): Response {
        $form = $this->createForm(PersonnelType::class, $personnel);
        $form->handleRequest($request);
    
        if ($form->isSubmitted()) {
            if ($personnelRepository->personnelExists($personnel)) {
                $this->addFlash('error', 'Un personnel avec le même nom, prénom et service existe déjà.');
            } elseif ($form->isValid()) {
                /** @var UploadedFile $imageFile */
                $imageFile = $form->get('imageFile')->getData();
    
                if ($request->request->get('remove_image') && $personnel->getImageUrl()) {
                    $imagePath = $this->getParameter('personnel_images_directory').'/'.$personnel->getImageUrl();
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                    $personnel->setImageUrl('null',null);
                }
    
                if ($imageFile) {
                    if ($personnel->getImageUrl()) {
                        $oldImagePath = $this->getParameter('personnel_images_directory').'/'.$personnel->getImageUrl();
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }
    
                    $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
    
                    try {
                        $imageFile->move(
                            $this->getParameter('personnel_images_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        $this->addFlash('warning', 'Une erreur est survenue lors du téléchargement de l\'image.');
                    }
    
                    $personnel->setImageUrl($newFilename);
                }
    
                $entityManager->flush();
                $this->addFlash('success', 'Le personnel a été mis à jour avec succès.');
    
                return $this->redirectToRoute('app_perso_index', [], Response::HTTP_SEE_OTHER);
            }
        }
    
        return $this->render('perso/edit.html.twig', [
            'personnel' => $personnel,
            'form' => $form->createView(),
            'app_name' => 'GoldenTouch'
        ]);
    }

    #[Route('/{idP}', name: 'app_perso_delete', methods: ['POST'])]
    public function delete(Request $request, Personnel $personnel, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$personnel->getIdP(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($personnel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_perso_index', [], Response::HTTP_SEE_OTHER);
    }



    //metieeer
    #[Route('/export-pdf', name: 'app_personnel_export_pdf')]
    public function exportPdf(PersonnelRepository $personnelRepository, PdfGenerator $pdfGenerator): Response
    {
        $personnels = $personnelRepository->findAll();
        
        $pdfContent = $pdfGenerator->generatePersonnelPdf($personnels);
        
        return new Response(
            $pdfContent,
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="personnels_export_'.date('Y-m-d').'.pdf"'
            ]
        );
    }


    #[Route('/stats', name: 'app_perso_stats', methods: ['GET'])]
    public function stats(PersonnelRepository $personnelRepository): Response
    {
        $serviceStats = $personnelRepository->getStatsByService();
        $reservationStats = $personnelRepository->getReservationStats();
        
        return $this->render('perso/stats.html.twig', [
            'stats' => $serviceStats,
            'reservationStats' => $reservationStats
        ]);
    }
    
    #[Route('/search', name: 'app_personnel_search', methods: ['GET'])]
    public function search(Request $request, PersonnelRepository $personnelRepository): Response
    {
        try {
            $term = $request->query->get('q', '');
            
            if (empty($term)) {
                return $this->render('perso/_search_results.html.twig', [
                    'personnels' => [],
                    'error' => null // Explicitement définir error à null
                ]);
            }
    
            $personnels = $personnelRepository->search($term);
    
            return $this->render('perso/_search_results.html.twig', [
                'personnels' => $personnels,
                'error' => null // Toujours passer la variable error
            ]);
        } catch (\Exception $e) {
            return new Response(
                $this->renderView('perso/_search_results.html.twig', [
                    'personnels' => [],
                    'error' => 'Une erreur est survenue lors de la recherche'
                ]),
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }



    #[Route('/{idP}', name: 'app_perso_show', methods: ['GET'])]
    public function show(Personnel $personnel, EntityManagerInterface $entityManager): Response
    {
        $reservations = $entityManager->getRepository(ReservationPerso::class)
            ->findBy(['idP' => $personnel->getIdP()]);
        
        $calendarEvents = [];
        foreach ($reservations as $reservation) {
            if ($reservation->getEvent()) {
                $event = $reservation->getEvent();
                $calendarEvents[] = [
                    'id' => $reservation->getIdR(),
                    'title' => $event->getNom(),
                    'start' => $event->getDate()->format('Y-m-d\TH:i:s'),
                    'color' => $this->getEventColor($event->getType()),
                    'extendedProps' => [
                        'type' => $event->getType(),
                    ]
                ];
            }
        }
        
        return $this->render('perso/show.html.twig', [
            'personnel' => $personnel,
            'reservations' => $reservations,
            'calendar_events' => $calendarEvents,
        ]);
    }

    private function getEventColor(?string $type): string
    {
        $colors = [
            'Meeting' => '#3788d8',
            'Conference' => '#d33c30',
            'Training' => '#3ab757',
            'Vacation' => '#f7c325',
            'default' => '#777777'
        ];
        
        return $colors[$type] ?? $colors['default'];
    }



}
