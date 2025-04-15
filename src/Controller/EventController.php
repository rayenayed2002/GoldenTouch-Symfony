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

use App\Entity\DetailPayment;

use App\Entity\Utilisateur;
use Symfony\Component\Security\Core\Security;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Repository\PanierRepository;

class EventController extends AbstractController
{

    #[Route('/ajouter-evenement', name: 'app_add_event')]
    public function addEvent(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event); // Pass the entity instance
        $user = $entityManager->getRepository(Utilisateur::class)->find(20); // Make sure User entity is correctly imported

        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $photoFile */
            $photoFile = $form->get('photo')->getData();
            
            // Handle file upload
            if ($photoFile) {
                $newFilename = uniqid().'.'.$photoFile->guessExtension();
                $photoFile->move(
                    $this->getParameter('kernel.project_dir').'/public/uploads',
                    $newFilename
                );
                $event->setPhoto($newFilename);
            }
    
            // Set the current user
            $event->setUtilisateur($user);
            $event->setType('EVENT'); // Ensures "EVENT" is always set

            // Persist to database
            $entityManager->persist($event);
            $entityManager->flush();
    
            $this->addFlash('success', 'Événement créé avec succès!');
            return $this->redirectToRoute('app_draft_events');
        }
    
        return $this->render('GestionEvent/AddEvent.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/events/draft', name: 'app_draft_events')]
    public function draftEvents(EntityManagerInterface $entityManager): Response
    {
        $qb = $entityManager->createQueryBuilder();
    
        $qb->select('e')
        ->from(Event::class, 'e')
        ->leftJoin('e.paniers', 'p')
        ->leftJoin('e.detailPayments', 'dc') // Corrected association name
        ->where('e.utilisateur = :userId')
        ->andWhere('p.id IS NULL')
        ->andWhere('dc.id IS NULL')
        ->setParameter('userId', 25);
        $events = $qb->getQuery()->getResult();
    
        // Define the category labels for display
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
    
        return $this->render('GestionEvent/test.html.twig', [
            'events' => $events,
            'categoryLabels' => $categoryLabels,
        ]);
    }
    

#[Route('/event/{id}/edit', name: 'app_event_edit', methods: ['POST'])]
public function edit(
    Request $request, 
    Event $event, 
    EntityManagerInterface $entityManager,
    #[Autowire('%kernel.project_dir%')] string $projectDir
): JsonResponse {
    $requestData = [];
    $nom = $request->request->get('nom');
$date = $request->request->get('date');
$categorie = $request->request->get('categorie');
    try {
        // Capture request data early
        $requestData = [
            'nom' => $request->request->get('nom'),
            'date' => $request->request->get('date'),
            'categorie' => $request->request->get('categorie'),
            'photo' => $request->files->get('photo') ? $request->files->get('photo')->getClientOriginalName() : null
        ];

        if (!$this->isCsrfTokenValid('edit-event', $request->request->get('_token'))) {
            return $this->jsonError('Invalid CSRF token', 400, $requestData);
        }

        // Validate required fields
        if (empty($requestData['nom']) || empty($requestData['date']) || empty($requestData['categorie'])) {
            return $this->jsonError('All fields are required', 400, $requestData);
        }

        // Update basic fields
        $event
            ->setNom($requestData['nom'])
            ->setDate(new \DateTime($requestData['date']))
            ->setCategorie(CategorieEvent::from($requestData['categorie']));

        // Handle file upload
        if ($photoFile = $request->files->get('photo')) {
            $uploadDir = $projectDir.'/public/uploads/';
            
            // Remove old photo
            if ($event->getPhoto() && file_exists($uploadPath = $uploadDir.$event->getPhoto())) {
                if (!@unlink($uploadPath)) {
                    return $this->jsonError('Failed to remove old photo', 500, $requestData);
                }
            }

            // Generate unique filename
            $newFilename = uniqid().'.'.$photoFile->guessExtension();

            try {
                $photoFile->move($uploadDir, $newFilename);
                $event->setPhoto($newFilename);
            } catch (FileException $e) {
                return $this->jsonError('File upload failed: '.$e->getMessage(), 500, $requestData);
            }
        }

        $entityManager->flush();

        return new JsonResponse([
            'success' => true,
            'photo' => $event->getPhoto() 
                ? $request->getSchemeAndHttpHost().'/uploads/'.$event->getPhoto()
                : null,
            'data' => $requestData
        ]);

    } catch (\Throwable $e) { // Catch all errors and exceptions
        return $this->jsonError(
            'Server error: '.$e->getMessage(),
            $e instanceof HttpExceptionInterface ? $e->getStatusCode() : 500,
            $requestData,
            ['trace' => $e->getTraceAsString()]
        );
    }
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
            $photoPath = $this->getParameter('kernel.project_dir').'/public/uploads/'.$event->getPhoto();
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

    // Fetch static user with ID = 1
    $user = $entityManager->getRepository(Utilisateur::class)->find(20  );
    if (!$user) {
        return new JsonResponse(['success' => false, 'message' => 'User not found'], 404);
    }

    // Create Panier object
    $panier = new Panier();
    $panier->setEvent($event);
    $panier->setUtilisateur($user);
    $panier->setTypeEvent('event'); // static
    $panier->setCategorie($data['categorie']);
    $panier->setDate(new \DateTime($data['date']));
    $panier->setPrice($event->getTotalPrice());

    try {
        $entityManager->persist($panier);
        $entityManager->flush();
        $logger->info('Panier successfully saved', ['panier' => $panier]);
        return new JsonResponse(['success' => true]);
    } catch (\Exception $e) {
        $logger->error('Error saving panier', ['exception' => $e]);
        return new JsonResponse(['success' => false, 'message' => 'Failed to save panier'], 500);
    }}
    
#[Route('/panier', name: 'app_panier', methods: ['GET'])]
public function ShowPanier(EntityManagerInterface $em, Security $security): Response
{
    $user = $em->getRepository(Utilisateur::class)->find(20); // or your static user ID
    
    $panierItems = $em->getRepository(Panier::class)->findBy(['utilisateur' => $user]);
    
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
    $user = $em->getRepository(Utilisateur::class)->find(20);
    
    if (!$user) {
        return $this->json(['success' => false, 'error' => 'User not found']);
    }

    // Get all cart items using standard repository method
    $items = $em->getRepository(Panier::class)->findBy(['utilisateur' => $user]);
    
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
    $user = $em->getRepository(Utilisateur::class)->find(20); // or your static user ID
    $count = $em->getRepository(Panier::class)->count(['utilisateur' => $user]);
    
    return new JsonResponse(['count' => $count]);
}
#[Route('/process-payment', name: 'app_process_payment', methods: ['POST'])]
public function processPayment(Request $request, EntityManagerInterface $em, PanierRepository $panierRepository): JsonResponse
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
        $user = $em->getRepository(Utilisateur::class)->find(20);
        if (!$user) {
            return new JsonResponse(['success' => false, 'error' => 'User not found']);
        }

        // Get cart items
        $cartItems = $panierRepository->findBy(['utilisateur' => $user]);
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
            $payment = new Payment();
            $payment->setUser($user)
            ->setAmount($calculatedAmount / 100)  // CORRECT METHOD
            ->setPaymentMethod($paymentIntent->payment_method_types[0] ?? 'card')  // CORRECT METHOD
            ->setCreatedAt(new \DateTime());  // Correct method name

            $em->persist($payment);
            $em->flush();

            // Create and save payment details
            foreach ($cartItems as $panier) {
                $event = $panier->getEvent();
                if ($event) {
                    $detail = new DetailPayment();
                    $detail->setPayment($payment)
                        ->setEvent($event)
                        ->setPrice((float)$panier->getPrice());
                    $em->persist($detail);
                }
            }

            // Clear cart and save changes
            $panierRepository->clearCart($user);
            $em->flush();

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
            'error' => 'Payment processing error',
            'system_error' => $e->getMessage()
        ], 500);
    }
}

#[Route('/MyCommandes', name: 'app_my_Commandes')]
public function myOrders(EntityManagerInterface $em): Response
{
    // In production, get the authenticated user instead of hardcoding
    $user = $em->getRepository(Utilisateur::class)->find(20);
    
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










}

