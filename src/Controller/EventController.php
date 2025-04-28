<?php

// src/Controller/EventController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Event; 
use App\Form\EventType;
use App\Enum\CategorieEvent;  // Ensure this is the correct path
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse; // Add this line
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Psr\Log\LoggerInterface;
use App\Entity\Panier;
use App\Entity\Payment;
use App\Repository\EventRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Entity\DetailPayment;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Entity\Pack;
use App\Entity\DemandePack;
use Symfony\Component\Mailer\MailerInterface;
use App\Service\EmailServiceP; 

use Doctrine\DBAL\Exception;

use App\Entity\User;
use Symfony\Component\Security\Core\Security;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Repository\PanierRepository;

class EventController extends AbstractController
{

    #[Route('/ajouter-evenement', name: 'app_add_event')]
    public function addEvent(Request $request, EntityManagerInterface $entityManager, HttpClientInterface $httpClient): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $user = $this->getUser();
    
        if (!$user) {
            throw $this->createAccessDeniedException('You must be logged in to add an event.');
        }
    
        // Handle AI generation if it's an AJAX request
        if ($request->isXmlHttpRequest() && $request->isMethod('POST')) {
            return $this->handleAIGeneration($request, $httpClient);
        }
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $photoFile */
            $photoFile = $form->get('photo')->getData();
            
            if ($photoFile) {
                $uploadDirectory = $this->getParameter('kernel.project_dir').'/public/uploads/packs/Images';
                $newFilename = uniqid().'.'.$photoFile->guessExtension();
                
                // Create directory if it doesn't exist
                if (!file_exists($uploadDirectory)) {
                    mkdir($uploadDirectory, 0777, true);
                }
    
                $photoFile->move(
                    $uploadDirectory,
                    $newFilename
                );
                // Store relative path in database
                $event->setPhoto('Images/'.$newFilename);
            } else {
                // Set default image if none was uploaded
                $event->setPhoto('Images/birthday.jpg');
            }
    
            $event->setUser($user);
            $event->setType('EVENT');
    
            $entityManager->persist($event);
            $entityManager->flush();
    
            $this->addFlash('success', 'Événement créé avec succès!');
            return $this->redirectToRoute('app_draft_events');
        }
    
        return $this->render('GestionEvent/AddEvent.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    private function handleAIGeneration(Request $request, HttpClientInterface $httpClient): JsonResponse
    {
        $description = json_decode($request->getContent(), true)['description'] ?? '';
        
        if (empty($description)) {
            return new JsonResponse(['error' => 'Veuillez entrer une description.'], 400);
        }
        
        try {
            $categories = implode(', ', [
                'MARIAGE', 'ANNIVERSAIRE', 'CONFERENCE', 'CONCERT', 'SEMINAIRE', 
                'FESTIVAL', 'SPORT', 'ATELIER'
            ]);
            
            $tomorrow = (new \DateTime('tomorrow'))->format('n/j/Y');
            
            $response = $httpClient->request('POST', 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=AIzaSyAOPsVC8I8i6vbg2eLImRDs_urmJo7MbKY', [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'contents' => [
                        [
                            'parts' => [
                                [
                                    'text' => "Generate an event based on this description: '$description'. You can choose from the following categories: $categories. The event date must be in the future, at least from $tomorrow onwards. Provide the name in french, category, and date in MM/dd/yyyy format. Return ONLY in this exact format:\n\nName: [event name]\nCategory: [category]\nDate: [MM/dd/yyyy]"
                                ]
                            ]
                        ]
                    ]
                ]
            ]);
            
            $data = $response->toArray();
            
            if (isset($data['error'])) {
                return new JsonResponse(['error' => $data['error']['message']], 400);
            }
            
            $candidates = $data['candidates'] ?? [];
            if (empty($candidates)) {
                return new JsonResponse(['error' => 'No candidates found in response.'], 400);
            }
            
            $content = $candidates[0]['content'] ?? [];
            $parts = $content['parts'] ?? [];
            if (empty($parts)) {
                return new JsonResponse(['error' => 'No parts found in response.'], 400);
            }
            
            $eventDetails = $parts[0]['text'] ?? '';
            $details = explode("\n", $eventDetails);
            
            $result = [];
            foreach ($details as $detail) {
                $detail = trim($detail);
                if (empty($detail)) continue;
                
                if (str_starts_with($detail, '**Name:**') || str_starts_with($detail, 'Name:')) {
                    $result['name'] = trim(str_replace(['**Name:**', 'Name:'], '', $detail));
                } elseif (str_starts_with($detail, '**Category:**') || str_starts_with($detail, 'Category:')) {
                    $result['category'] = trim(str_replace(['**Category:**', 'Category:'], '', $detail));
                } elseif (str_starts_with($detail, '**Date:**') || str_starts_with($detail, 'Date:')) {
                    $result['date'] = trim(str_replace(['**Date:**', 'Date:'], '', $detail));
                }
            }
            
            return new JsonResponse($result);
            
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Impossible de générer l\'événement: ' . $e->getMessage()], 500);
        }
    }

    #[Route('/events/draft', name: 'app_draft_events')]
    public function draftEvents(Request $request, EntityManagerInterface $entityManager): Response
    {
        $currentPage = $request->query->getInt('page', 1);
    $orderBy = $request->query->get('orderby', 'date');
    $sortDirection = $request->query->get('sort', 'DESC');
    $pageSize = 9;
    $user = $this->getUser();
    
    if (!$user) {
        throw $this->createAccessDeniedException('You must be logged in to add an event.');
    }
    // Query 1: Events where the user is the owner
    $qbOwner = $entityManager->createQueryBuilder() 
        ->select('e')
        ->from(Event::class, 'e')
        ->leftJoin('e.paniers', 'p')
        ->leftJoin('e.detailPayments', 'dc')
        ->where('e.user = :userId')
        ->andWhere('p.id IS NULL')
        ->andWhere('dc.id IS NULL')
        ->setParameter('userId', $user->getId());

    $eventsOwner = $qbOwner->getQuery()->getResult();

    // Query 2: Events for which the user has a CONFIRMÉ DemandePack
    $qbDemande = $entityManager->createQueryBuilder()
        ->select('DISTINCT e')
        ->from(Event::class, 'e')
        ->innerJoin('App\Entity\Pack', 'pack', 'WITH', 'pack.event = e.id')
        ->innerJoin('App\Entity\DemandePack', 'dp', 'WITH', 'dp.pack = pack.id')
        ->leftJoin('e.paniers', 'p')
        ->leftJoin('e.detailPayments', 'dc')
        ->where('dp.user = :userId')
        ->andWhere('dp.statut = :statutConfirme')
        ->andWhere('p.id IS NULL')
        ->andWhere('dc.id IS NULL')
        ->setParameter('userId', $user->getId())
        ->setParameter('statutConfirme', 'CONFIRMÉ');

    $eventsDemande = $qbDemande->getQuery()->getResult();

    // Merge and deduplicate events
    $events = array_filter(array_merge($eventsOwner, $eventsDemande), function($item) {
        return $item instanceof \App\Entity\Event;
    });
    $events = array_unique($events, SORT_REGULAR);

    // Use ArrayPaginator for manual pagination
    $totalItems = count($events);
    $totalPages = ceil($totalItems / $pageSize);
    $offset = $pageSize * ($currentPage - 1);
    $eventsPage = array_slice($events, $offset, $pageSize);


        

    // Sort the merged events array manually since we are not using a query builder
    usort($events, function($a, $b) use ($orderBy, $sortDirection) {
        switch ($orderBy) {
            case 'name':
                $valA = method_exists($a, 'getNom') ? $a->getNom() : '';
                $valB = method_exists($b, 'getNom') ? $b->getNom() : '';
                break;
            case 'date':
                $valA = method_exists($a, 'getDate') ? $a->getDate() : null;
                $valB = method_exists($b, 'getDate') ? $b->getDate() : null;
                break;
            case 'category':
                $valA = method_exists($a, 'getCategorie') ? $a->getCategorie() : '';
                $valB = method_exists($b, 'getCategorie') ? $b->getCategorie() : '';
                break;
            default:
                $valA = method_exists($a, 'getDate') ? $a->getDate() : null;
                $valB = method_exists($b, 'getDate') ? $b->getDate() : null;
        }
        if ($valA == $valB) return 0;
        if ($sortDirection === 'DESC') {
            return ($valA < $valB) ? 1 : -1;
        } else {
            return ($valA > $valB) ? 1 : -1;
        }
    });
    // Pagination is already handled above; remove obsolete paginator code

        // Category labels
        $categoryLabels = [
            CategorieEvent::MARIAGE->value => 'Mariage',
            CategorieEvent::ANNIVERSAIRE->value => 'Anniversaire',
            CategorieEvent::CONFERENCE->value => 'Conférence',
            CategorieEvent::CONCERT->value => 'Concert',
            CategorieEvent::SEMINAIRE->value => 'Séminaire',
            CategorieEvent::FESTIVAL->value => 'Festival',
            CategorieEvent::SPORT->value => 'Sport',
            CategorieEvent::ATELIER->value => 'Atelier',
        ];
    
        $userId = $user->getId();
        $demandePackRepo = $entityManager->getRepository(\App\Entity\DemandePack::class);
        $userDemandePacks = $demandePackRepo->findBy([
            'user' => $userId,
            'statut' => 'CONFIRMÉ'
        ]);
        $demandePackByEvent = [];
        foreach ($userDemandePacks as $dp) {
            if ($dp->getEvent()) {
                $demandePackByEvent[$dp->getEvent()->getId()] = $dp;
            }
        }

        return $this->render('GestionEvent/test.html.twig', [
            'events' => $eventsPage,
            'categoryLabels' => $categoryLabels,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
            'pageSize' => $pageSize,
            'orderby' => $orderBy,
            'sort' => $sortDirection,
            'demandePackByEvent' => $demandePackByEvent
        ]);  
    }
    


    #[Route('/admin/events', name: 'app_events_admin')]
    public function allEvents(Request $request, EntityManagerInterface $entityManager): Response
    {
        $searchTerm = $request->query->get('search');
        $sortBy = $request->query->get('sort', 'date_desc');
        $eventRepository = $entityManager->getRepository(Event::class);
        
        $events = $eventRepository->searchAndSortEvents($searchTerm, $sortBy);

        $categoryLabels = [
            CategorieEvent::MARIAGE->value => 'Mariage',
            CategorieEvent::ANNIVERSAIRE->value => 'Anniversaire',
            CategorieEvent::CONFERENCE->value => 'Conférence',
            CategorieEvent::CONCERT->value => 'Concert',
            CategorieEvent::SEMINAIRE->value => 'Séminaire',
            CategorieEvent::FESTIVAL->value => 'Festival',
            CategorieEvent::SPORT->value => 'Sport',
            CategorieEvent::ATELIER->value => 'Atelier',
        ];

    // Return partial for AJAX requests
    $template = $request->isXmlHttpRequest() ? '_events.html.twig' : 'admin_events.html.twig';

    return $this->render("GestionEvent/{$template}", [
        'events' => $events,
        'categoryLabels' => $categoryLabels,
        'searchTerm' => $searchTerm,
        'sortBy' => $sortBy
    ]);
}


#[Route('/event/{id}/edit', name: 'app_event_edit', methods: ['POST'])]
public function edit(
    Request $request, 
    Event $event, 
    EntityManagerInterface $entityManager,
    #[Autowire('%kernel.project_dir%')] string $projectDir
): RedirectResponse {
    try {
        // Validate CSRF token first
        if (!$this->isCsrfTokenValid('edit-event', $request->request->get('_token'))) {
            $this->addFlash('error', 'Invalid CSRF token');
            return $this->redirectToRoute('event_show', ['id' => $event->getId()]);
        }

        // Get and validate parameters
        $nom = $request->request->get('nom');
        $date = $request->request->get('date');
        $categorie = $request->request->get('categorie');

        if (empty($nom) || empty($date) || empty($categorie)) {
            $this->addFlash('error', 'All fields are required');
            return $this->redirectToRoute('event_show', ['id' => $event->getId()]);
        }

        // Update basic fields
        $event
            ->setNom($nom)
            ->setDate(new \DateTime($date))
            ->setCategorie(CategorieEvent::from($categorie));

        // Handle file upload
        if ($photoFile = $request->files->get('photo')) {
            $uploadDir = $projectDir.'/public/uploads/packs/';
            
            // Remove old photo if exists
            if ($event->getPhoto()) {
                $oldPhotoPath = $uploadDir.$event->getPhoto();
                if (file_exists($oldPhotoPath)) {
                    @unlink($oldPhotoPath);
                }
            }

            // Generate new filename and move file
            $newFilename = uniqid().'.'.$photoFile->guessExtension();
            $photoFile->move($uploadDir, $newFilename);
            $event->setPhoto($newFilename);
        }

        $entityManager->flush();
        $this->addFlash('success', 'Event updated successfully');

    } catch (\Throwable $e) {
        $this->addFlash('error', 'Error updating event: '.$e->getMessage());
    }

    return $this->redirectToRoute('event_show', ['id' => $event->getId()]);
}

private function jsonError(string $message, int $status = 400, array $data = [], array $additional = []): JsonResponse
{
    return new JsonResponse(array_merge([
        'success' => false,
        'message' => $message,
        'data' => $data
    ], $additional), $status);
}

#[Route('/event/{id}/delete', name: 'app_event_delete', methods: ['POST'])]
public function delete(Request $request, Event $event, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->request->get('_token'))) {
        // Remove associated photo
        if ($event->getPhoto()) {
            $photoPath = $this->getParameter('kernel.project_dir').'/public/uploads/packs/'.$event->getPhoto();
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }

        // Remove the event from the database
        $entityManager->remove($event);
        $entityManager->flush();

        // Redirect to the draft events page after deletion
        return $this->redirectToRoute('app_draft_events');
    }

    // Return JSON response indicating failure if CSRF validation fails
    return new JsonResponse(['success' => false], Response::HTTP_BAD_REQUEST);
}



#[Route('/panier/add', name: 'app_panier_add', methods: ['POST'])]
public function addToCart(Request $request, EntityManagerInterface $entityManager, LoggerInterface $logger): JsonResponse
{
    $data = json_decode($request->getContent(), true);
    $logger->info('Incoming addToCart request', ['data' => $data]);

    // Check for required fields
    if (!isset($data['idEvent']) || !isset($data['categorie']) || !isset($data['date'])) {
        $logger->warning('Missing required fields', ['data' => $data]);
        return new JsonResponse(['success' => false, 'message' => 'Missing required fields'], 400);
    }

    // Fetch Event entity
    $event = $entityManager->getRepository(Event::class)->find($data['idEvent']);
    if (!$event) {
        return new JsonResponse(['success' => false, 'message' => 'Event not found'], 404);
    }

    // Check if this is a pack event
    $pack = $entityManager->getRepository(Pack::class)->findOneBy(['event' => $event]);
    
    // Validate pack requirements
    if ($pack) {
        // Check if there's a confirmed demande for this pack
        $demande = $entityManager->getRepository(DemandePack::class)->findOneBy([
            'pack' => $pack,
            'statut' => 'CONFIRMÉ'
        ]);
        
        if (!$demande) {
            return new JsonResponse(['success' => false, 'message' => 'Pack not confirmed'], 400);
        }
    }

    $user = $this->getUser();
        if (!$user) {
        return new JsonResponse(['success' => false, 'message' => 'User not found'], 404);
    }

    // Create Panier object
    $panier = new Panier();
    $panier->setEvent($event);
    $panier->setUser($user);
    $panier->setCategorie($data['categorie']);
    $panier->setDate(new \DateTime($data['date']));

    // Set price and type based on pack existence
    if ($pack) {
        $panier->setTypeEvent('pack');
        $panier->setPrice($pack->getPrix());
    } else {
        $panier->setTypeEvent('event');
        $panier->setPrice($event->getTotalPrice());
    }

    try {
        $entityManager->persist($panier);
        $entityManager->flush();
        $logger->info('Panier successfully saved', ['panier' => $panier]);
        return new JsonResponse(['success' => true]);
    } catch (\Exception $e) {
        $logger->error('Error saving panier', ['exception' => $e]);
        return new JsonResponse(['success' => false, 'message' => 'Failed to save panier'], 500);
    }
}
    
#[Route('/panier', name: 'app_panier', methods: ['GET'])]
public function ShowPanier(EntityManagerInterface $em, Security $security): Response
{
    $user = $this->getUser();    
    $panierItems = $em->getRepository(Panier::class)->findBy(['user' => $user]);
    
    $total = array_reduce($panierItems, function($sum, $item) {
        return $sum + $item->getPrice();
    }, 0);
    
    return $this->render('GestionEvent/Panier.html.twig', [
        'panierItems' => $panierItems,
        'total' => $total
    ]);
}
#[Route('/panier/remove/{id}', name: 'app_panier_remove', methods: ['POST'])]
public function removeFromCart(int $id, EntityManagerInterface $em): JsonResponse
{
    $item = $em->getRepository(Panier::class)->find($id);
    
    if ($item) {
        $em->remove($item);
        $em->flush();
        
        return $this->json(['success' => true]);
    }
    
    return $this->json(['success' => false], 404);
}

#[Route('/panier/clear', name: 'app_panier_clear', methods: ['POST'])]
public function clearCart(EntityManagerInterface $em): JsonResponse
{
    // Static user for development
    $user = $this->getUser();    
    if (!$user) {
        return $this->json(['success' => false, 'error' => 'User not found']);
    }

    // Get all cart items using standard repository method
    $items = $em->getRepository(Panier::class)->findBy(['user' => $user]);
    
    // Remove each item
    foreach ($items as $item) {
        $em->remove($item);
    }
    
    $em->flush();
    
    return $this->json(['success' => true]);
}


#[Route('/cart/count', name: 'app_panier_count')]
public function cartCount(EntityManagerInterface $em, Security $security): Response
{
    $user = $this->getUser();
        $count = $em->getRepository(Panier::class)->count(['user' => $user]);
    
    return new JsonResponse(['count' => $count]);
}
#[Route('/process-payment', name: 'app_process_payment', methods: ['POST'])]
public function processPayment(Request $request, EntityManagerInterface $em, PanierRepository $panierRepository, EmailServiceP $emailServiceP,
LoggerInterface $logger ): JsonResponse
{
    $data = json_decode($request->getContent(), true);
    
    try {
        // Input validation
        if (!isset($data['paymentMethodId'])) {
            return new JsonResponse(['success' => false, 'error' => 'Missing payment method ID']);
        }

        if (!isset($data['amount'])) {
            return new JsonResponse(['success' => false, 'error' => 'Missing amount']);
        }

        // Get user (remove hardcoded ID in production)
        $user = $this->getUser();
                if (!$user) {
            return new JsonResponse(['success' => false, 'error' => 'User not found']);
        }

        // Get cart items
        $cartItems = $panierRepository->findBy(['user' => $user]);
        if (empty($cartItems)) {
            return new JsonResponse(['success' => false, 'error' => 'Cart is empty']);
        }

        // Calculate total amount in cents
        $calculatedAmount = 0;
        $cartDebug = [];
        
        foreach ($cartItems as $panier) {
            $priceEur = (float)$panier->getPrice();
            $priceCents = (int)round($priceEur * 100);
            
            $cartDebug[] = [
                'eventId' => $panier->getEvent()?->getId(),
                'eventName' => $panier->getEvent()?->getNom(),
                'price_eur' => $priceEur,
                'price_cents' => $priceCents,
            ];
            
            $calculatedAmount += $priceCents;
        }

        // Convert received amount to integer
        $receivedAmount = (int)$data['amount'];

        // Verify amount with tolerance (5 cents)
        if (abs($calculatedAmount - $receivedAmount) > 5) {
            return new JsonResponse([
                'success' => false, 
                'error' => 'Cart total mismatch',
                'details' => [
                    'calculated_cents' => $calculatedAmount,
                    'received_cents' => $receivedAmount,
                    'difference' => $calculatedAmount - $receivedAmount,
                    'cartDebug' => $cartDebug,
                    'note' => 'Amounts should be in cents (1€ = 100 cents)'
                ]
            ]);
        }
 
        // Process Stripe payment
        \Stripe\Stripe::setApiKey('sk_test_51QvjqJKNitkaIcyAQVqN2T63JJ0vrUFwdbqfVQMNPWu4UzkqjcH2HmIABFxLOg34aZkGTNco7Bs41837SUtIN4o3006H4eMRxF');        
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => $calculatedAmount,
            'currency' => 'eur',
            'payment_method' => $data['paymentMethodId'],
            'confirm' => true,
            'automatic_payment_methods' => [
                'enabled' => true,
                'allow_redirects' => 'never',
            ],
        ]);

        if ($paymentIntent->status === 'succeeded') {
            // Create and save payment
            $em->getConnection()->beginTransaction(); 
            try {
                // Create and save payment
                $payment = new Payment();
                $payment->setUser($user)
                    ->setAmount($calculatedAmount / 100)
                    ->setPaymentMethod($paymentIntent->payment_method_types[0] ?? 'card')
                    ->setCreatedAt(new \DateTime());
                
                $em->persist($payment);
                $em->flush(); // Get payment ID
            
                // Create details
                foreach ($cartItems as $panier) {
                    $event = $panier->getEvent();
                    if ($event) {
                        $detail = new DetailPayment();
                        $detail->setPayment($payment)
                            ->setEvent($event)
                            ->setPrice((float)$panier->getPrice());
                        
                        $em->persist($detail);
                        $logger->info('Persisted detail payment', [
                            'detail_id' => $detail->getId()
                        ]);
                    }
                }
            
                // Clear cart
                $panierRepository->clearCart($user);
            
                // Commit all changes together
                $em->flush();
                $em->getConnection()->commit();
            } catch (\Exception $e) { // Add transaction catch
                $em->getConnection()->rollBack();
                $logger->error('Transaction failed: '.$e->getMessage());
                return new JsonResponse(['success' => false, 'error' => 'Payment processing failed'], 500);
            }
          try {
            $emailServiceP->sendPaymentConfirmation(
         $user,
               $calculatedAmount / 100,
                 $payment->getId(),
                   $user->getEmail()
              );
         } catch (\Exception $e) {
            $logger->error('Mailer error: ' . $e->getMessage());
             return new JsonResponse(['success' => false, 'error' => 'Email sending failed'], 500);
       }
            return new JsonResponse([
                'success' => true,
                'paymentId' => $payment->getId(),
                'amountCharged' => $calculatedAmount / 100,
                'itemsCount' => count($cartItems)
            ]);
        }
        
        return new JsonResponse([
            'success' => false, 
            'error' => 'Payment failed',
            'stripe_error' => $paymentIntent->last_payment_error?->message
        ]);
        
    } catch (\Stripe\Exception\CardException $e) {
        return new JsonResponse([
            'success' => false, 
            'error' => 'Card error',
            'stripe_error' => $e->getError()->message
        ]);
    } catch (\Exception $e) {
        return new JsonResponse([
            'success' => false, 
            'error' => 'DEBUG: Full Error',
            'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString() // Full stack trace
        ], 500);
    }
}




#[Route('/test-email', name: 'test_email')]
public function testEmail(EmailServiceP $emailService): JsonResponse
{
    try {
        // Create a mock user
        $user = new User();
        $user->setPrenom('TestUser');
        $user->setEmail('ayed.rayen09@gmail.com'); // Use real email here

        $emailService->sendPaymentConfirmation(
            $user,
            99.99,
            9999,
            $user->getEmail()
        );

        return new JsonResponse(['status' => 'Email sent successfully']);
    } catch (\Throwable $e) {
        return new JsonResponse([
            'error' => 'Email failed',
            'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ], 500);
    }
}


#[Route('/MyCommandes', name: 'app_my_Commandes')]
public function myOrders(EntityManagerInterface $em): Response
{
    // In production, get the authenticated user instead of hardcoding
    $user = $this->getUser();    
    $payments = $em->getRepository(Payment::class)->findBy(
        ['user' => $user],
        ['createdAt' => 'DESC']
    );
    
    return $this->render('GestionEvent/Commande.html.twig', [
        'payments' => $payments,
    ]);
}


#[Route('/delete-order', name: 'app_delete_order', methods: ['POST'])]
public function deleteOrder(Request $request, EntityManagerInterface $em): JsonResponse
{
    $orderId = $request->request->get('id');
    
    try {
        $payment = $em->getRepository(Payment::class)->find($orderId);
        
        if (!$payment) {
            return new JsonResponse(['success' => false, 'error' => 'Order not found']);
        }
        
        // Remove all related details first
        foreach ($payment->getDetails() as $detail) {
            $em->remove($detail);
        }
        
        $em->remove($payment);
        $em->flush();
        
        return new JsonResponse(['success' => true]);
        
    } catch (\Exception $e) {
        return new JsonResponse(['success' => false, 'error' => $e->getMessage()]);
    }
}


#[Route('/print-invoice', name: 'app_print_invoice')]
public function printInvoice(Request $request, EntityManagerInterface $em): Response
{
    $orderId = $request->query->get('id');
    $payment = $em->getRepository(Payment::class)->find($orderId);
    
    if (!$payment) {
        throw $this->createNotFoundException('Order not found');
    }
    
    return $this->render('GestionEvent/invoice.html.twig', [
        'payment' => $payment,
    ]);
}


#[Route('/event/{id}', name: 'event_show')]
public function EventShow(
    Event $event,
    EventRepository $eventRepository,
    EntityManagerInterface $em
): Response {
    $similarEvents = $eventRepository->createQueryBuilder('e')
        ->where('e.categorie = :category')
        ->andWhere('e.id != :currentId')
        ->setParameter('category', $event->getCategorie()->value)
        ->setParameter('currentId', $event->getId())
        ->orderBy('e.date', 'ASC')
        ->setMaxResults(6)
        ->getQuery()
        ->getResult();
        

    return $this->render('GestionEvent/DetailEvent.html.twig', [
        'event' => $event,
        'similarEvents' => $similarEvents,
        'categorie_options' => CategorieEvent::cases(),
    ]);
}







#[Route('/admin/event/{id}', name: 'admin_event_show')]
public function AdminEventShow(
    Event $event,
    EventRepository $eventRepository,
    EntityManagerInterface $em
): Response {
    $similarEvents = $eventRepository->createQueryBuilder('e')
        ->where('e.categorie = :category')
        ->andWhere('e.id != :currentId')
        ->setParameter('category', $event->getCategorie()->value)
        ->setParameter('currentId', $event->getId())
        ->orderBy('e.date', 'ASC')
        ->setMaxResults(6)
        ->getQuery()
        ->getResult();
        

    return $this->render('GestionEvent/admin_events_detail.html.twig', [
        'event' => $event,
        'similarEvents' => $similarEvents,
        'categorie_options' => CategorieEvent::cases(),
    ]);
}



#[Route('/admin/MyCommandes', name: 'app_my_Commandes_admin')]
public function myOrdersAdmin(EntityManagerInterface $em, Request $request): Response
{
    $query = $em->getRepository(Payment::class)->createQueryBuilder('p')
        ->orderBy('p.createdAt', 'DESC');

    // Add search filters if needed (for server-side processing)
    // This example uses client-side processing but can be adapted

    $payments = $query->getQuery()->getResult();
    
    return $this->render('GestionEvent/admin_commandes.html.twig', [
        'payments' => $payments,
    ]);
}



}

