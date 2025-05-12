<?php

namespace App\Controller;

use App\Entity\ReservMat;
use App\Entity\Materielle;
use App\Entity\Event;
use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ReservMatRepository;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh; // For v4.x
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;   // For v4.x
use Endroid\QrCode\Writer\PngWriter;
use Knp\Component\Pager\PaginatorInterface;



// Remove this line:

// Add these lines instead:

final class ReservMatController extends AbstractController
{
    #[Route('/reservations', name: 'app_reservations')]
    public function index(Request $request, ReservMatRepository $reservMatRepository): Response
    {
        $searchTerm = $request->query->get('q', '');
        
        $query = $reservMatRepository->createQueryBuilder('r')
            ->leftJoin('r.materielle', 'm')
            ->leftJoin('r.event', 'e')
            ->leftJoin('r.user', 'u') // Changé de 'utilisateur' à 'user'
            ->addSelect('m', 'e', 'u');
        
        if ($searchTerm) {
            $query->where('m.nom_mat LIKE :term OR e.nom LIKE :term OR u.email LIKE :term')
                ->setParameter('term', '%'.$searchTerm.'%');
        }
        
        $reservations = $query->getQuery()->getResult();
        
        if ($request->isXmlHttpRequest()) {
            return $this->render('materiels/_reservations_grid.html.twig', [
                'reservations' => $reservations
            ]);
        }
        
        return $this->render('materiels/reservationMat.html.twig', [
            'reservations' => $reservations,
            'searchTerm' => $searchTerm
        ]);
    }
    #[Route('/mes-reservations', name: 'app_mes_reservations')]
    public function mesReservations(Request $request, ReservMatRepository $reservMatRepository, CategorieRepository $categorieRepository, PaginatorInterface $paginator): Response
    {
        $user = $this->getUser();
    
        if (!$user) {
            throw $this->createAccessDeniedException('You must be logged in to add an event.');
        }  
        $userId = $user->getId(); // À remplacer par l'ID de l'utilisateur connecté
    
        $orderBy = $request->query->get('orderby', 'r.id_reserv');
        $categorieId = $request->query->get('categorie'); // récupère la catégorie sélectionnée
    
        $queryBuilder = $reservMatRepository->createQueryBuilder('r')
            ->leftJoin('r.materielle', 'm')
            ->leftJoin('r.event', 'e')
            ->where('r.user = :userId') // Changé de 'utilisateur' à 'user'
            ->setParameter('userId', $userId)
            ->addSelect('m', 'e');
    
        // Appliquer filtre catégorie AVANT la pagination
        if ($categorieId) {
            $queryBuilder->andWhere('m.categorie = :categorieId')
                         ->setParameter('categorieId', $categorieId);
        }
    
        switch ($orderBy) {
            case 'price_asc':
                $queryBuilder->orderBy('m.prixMat', 'ASC');
                break;
            case 'price_desc':
                $queryBuilder->orderBy('m.prixMat', 'DESC');
                break;
            case 'name':
                $queryBuilder->orderBy('m.nomMat', 'ASC');
                break;
            case 'quantity':
                $queryBuilder->orderBy('r.quantite', 'DESC');
                break;
            default:
                $queryBuilder->orderBy('r.id_reserv', 'DESC');
        }
    
        $reservations = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            6
        );
    
        $categories = $categorieRepository->findAll();
    
        return $this->render('materiels/mes_reservations.html.twig', [
            'reservations' => $reservations,
            'categories' => $categories,
        ]);
    }
    
    #[Route('/reserv/mat/new', name: 'app_reserv_mat_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ParameterBagInterface $params): Response
    {
        $idMat = $request->request->get('id_mat');
        $idEvent = $request->request->get('id_event');
        $quantite = (int)$request->request->get('quantite');
        
        // ID utilisateur fixe (par défaut)
        $user = $this->getUser();
    
        if (!$user) {
            throw $this->createAccessDeniedException('You must be logged in to add an event.');
        }    
        if (empty($idMat) || empty($idEvent) || empty($quantite)) {
            $this->addFlash('error', 'Tous les champs sont obligatoires');
            return $this->redirectToRoute('app_materiels_show_Details', ['id' => $idMat]);
        }
    
        $materiel = $entityManager->getRepository(Materielle::class)->find($idMat);
        $event = $entityManager->getRepository(Event::class)->find($idEvent);
    
        if (!$materiel || !$event || !$user) {
            $this->addFlash('error', 'Données introuvables');
            return $this->redirectToRoute('app_materiels_show_Details', ['id' => $idMat]);
        }
    
        // Vérification si l'utilisateur a déjà réservé ce matériel POUR CET ÉVÉNEMENT
        $existingReservation = $entityManager->getRepository(ReservMat::class)->findOneBy([
            'materielle' => $materiel,
            'user' => $user, // Changé de 'utilisateur' à 'user'
            'event' => $event
        ]);
    
        if ($existingReservation) {
            $this->addFlash('error', 'Vous avez déjà réservé ce matériel pour cet événement.');
            return $this->redirectToRoute('app_materiels_show_Details', ['id' => $idMat]);
        }
    
        // Vérification du stock
        if ($quantite > $materiel->getQuantiteMat()) {
            $this->addFlash('error', 'La quantité demandée dépasse le stock disponible');
            return $this->redirectToRoute('app_materiels_show_Details', ['id' => $idMat]);
        }
    
        // Création et enregistrement de la réservation
        $reservation = new ReservMat();
        $reservation->setMaterielle($materiel);
        $reservation->setEvent($event);
        $reservation->setQuantite($quantite);
        $reservation->setUser($user); // Changé de setUtilisateur à setUser
        // Le statut est déjà "non confirmé" par défaut, donc pas besoin de le définir ici
    
        // Mise à jour du stock
        $materiel->setQuantiteMat($materiel->getQuantiteMat() - $quantite);
    
        $entityManager->persist($reservation);
        $entityManager->flush();
    
        $this->addFlash('success', 'Réservation effectuée avec succès (en attente de confirmation)');
        return $this->redirectToRoute('app_mes_reservations');
    }
    #[Route('/reservation/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(ReservMat $reservation): Response
    {
        if (!$reservation) {
            throw $this->createNotFoundException('Réservation non trouvée');
        }
    
        // Generate QR code only if reservation is confirmed or cancelled
        $qrCode = null;
        if (in_array($reservation->getStatut(), ['confirmée', 'annulée'])) {
            try {
                $qrContent = sprintf(
                    "Réservation #%d\nMatériel: %s\nQuantité: %d\nStatut: %s",
                    $reservation->getIdReserv(),
                    $reservation->getMaterielle()->getNomMat(),
                    $reservation->getQuantite(),
                    $reservation->getStatut()
                );
    
                $qrCode = Builder::create()
                    ->writer(new PngWriter())
                    ->data($qrContent)
                    ->encoding(new Encoding('UTF-8'))
                    ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
                    ->size(300)
                    ->margin(20)
                    ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
                    ->build();
    
            } catch (\Exception $e) {
                // Log error but don't break the page
                $this->addFlash('warning', 'Erreur lors de la génération du QR Code');
            }
        }
    
        // Vérification du statut
        if ($reservation->getStatut() === 'non confirmé') {
            return $this->render('materiels/details_res.html.twig', [
                'reservation' => $reservation,
            ]);
        }
    
        return $this->render('materiels/DetailsSimple.html.twig', [
            'reservation' => $reservation,
            'qrCode' => $qrCode ? $qrCode->getDataUri() : null,
            'qrCodeBase64' => $qrCode ? base64_encode($qrCode->getString()) : null
        ]);
    }

    #[Route('/reservation/{id}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservMat $reservation, EntityManagerInterface $entityManager): Response
    {
        $events = $entityManager->getRepository(Event::class)->findAll();
  
        if ($request->isMethod('POST')) {
            $quantite = (int)$request->request->get('quantite');
            $eventId = $request->request->get('id_event');
            $selectedEvent = $entityManager->getRepository(Event::class)->find($eventId);
    
            if (!$selectedEvent) {
                $this->addFlash('error', 'Événement invalide.');
                return $this->redirectToRoute('app_reservation_edit', ['id' => $reservation->getIdReserv()]);
            }
    
            // Vérification du stock disponible
            $differenceQuantite = $quantite - $reservation->getQuantite();
            $nouveauStock = $reservation->getMaterielle()->getQuantiteMat() - $differenceQuantite;
    
            if ($nouveauStock < 0) {
                $this->addFlash('error', 'La quantité demandée dépasse le stock disponible.');
                return $this->redirectToRoute('app_reservation_edit', ['id' => $reservation->getIdReserv()]);
            }
    
            // Mise à jour des données
            $reservation->setQuantite($quantite);
            $reservation->setEvent($selectedEvent);
            $reservation->getMaterielle()->setQuantiteMat($nouveauStock);
    
            $entityManager->flush();
    
            $this->addFlash('success', 'Réservation modifiée avec succès.');
            return $this->redirectToRoute('app_reservation_show', ['id' => $reservation->getIdReserv()]);
        }
    
        return $this->render('materiels/edit_reservation.html.twig', [
            'reservation' => $reservation,
            'events' => $events,
        ]);
    }
    
    #[Route('/reservation/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, ReservMat $reservation, EntityManagerInterface $entityManager): Response
    {
       
        if ($this->isCsrfTokenValid('delete'.$reservation->getIdReserv(), $request->request->get('_token'))) {
            // Restaurer le stock avant suppression
            $materiel = $reservation->getMaterielle();
            $materiel->setQuantiteMat($materiel->getQuantiteMat() + $reservation->getQuantite());
            
            $entityManager->remove($reservation);
            $entityManager->flush();
            
            $this->addFlash('success', 'Réservation supprimée avec succès');
        }

        return $this->redirectToRoute('app_mes_reservations');
    }
    #[Route('/reservations/{id}', name: 'app_reservation_details', methods: ['GET'])]
public function details(ReservMat $reservation): Response
{
    // Vérifie si la réservation existe (géré automatiquement par le param converter)
    if (!$reservation) {
        throw $this->createNotFoundException('Réservation non trouvée');
    }

    return $this->render('materiels/deR.html.twig', [
        'reservation' => $reservation,
    ]);
}
#[Route('/reservation/{id}/confirmer', name: 'app_reservation_confirmer', methods: ['POST'])]
public function confirmerReservation(
    Request $request,
    int $id,
    ReservMatRepository $reservMatRepository,  // Changed parameter name
    EntityManagerInterface $entityManager,
    MailerInterface $mailer
): Response {
    $reservation = $reservMatRepository->find($id);
    
    if (!$reservation) {
        throw $this->createNotFoundException('Réservation non trouvée');
    }

    $message = $request->request->get('message');
    
    // Update status
    $reservation->setStatut('confirmée');
    $entityManager->flush();
    
    // Send confirmation email
    $imagePath = $this->getParameter('kernel.project_dir') . '/public/uploads/materiels/logo.png';

    $email = (new Email())
    ->from('service.goldentouch1@gmail.com')
    ->to($reservation->getUser()->getEmail()) // Changé de getUtilisateur() à getUser()
    ->subject('Confirmation de votre réservation')
    ->text($message)
    ->html('
        <div style="font-family: Arial, sans-serif; color: #333;">
            <div style="text-align: center; padding: 20px;">
                <img src="cid:logo" alt="GoldenTouch" style="width: 150px; margin-bottom: 20px;">
            </div>
            <div style="background-color: #f9f9f9; padding: 20px; border-radius: 8px;">
                <h2 style="color: #FFA500;">Merci pour votre réservation !</h2>
                <p>Bonjour <strong>' . htmlspecialchars($reservation->getUser()->getNom()) . '</strong>,</p>
                <p>Votre demande de réservation est maintenant <strong>confirmée</strong>.</p>
                <p><strong>Détails :</strong></p>
                <ul>
                    <li>Matériel : ' . htmlspecialchars($reservation->getMaterielle()->getNomMat()) . '</li>
                    <li>Quantité : ' . $reservation->getQuantite() . '</li>
                    <li>Événement : ' . htmlspecialchars($reservation->getEvent()->getNom()) . '</li>
                </ul>
                <p>Merci de votre confiance, nous sommes ravis de vous compter parmi nos clients !</p>
                <a href="http://127.0.0.1:8000/mes-reservations" 
                   style="display: inline-block; margin-top: 15px; background-color: #FFA500; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">
                   Voir mes réservations
                </a>
            </div>
            <div style="text-align: center; font-size: 12px; color: #999; margin-top: 20px;">
                © '.date('Y').' GoldenTouch — Tous droits réservés.
            </div>
        </div>
    ');

        
    
    $mailer->send($email);

    $this->addFlash('success', 'La réservation a été confirmée et un email a été envoyé.');
    return $this->redirectToRoute('app_reservations');
}

#[Route('/reservation/{id}/annuler', name: 'app_reservation_annuler', methods: ['POST'])]
public function annulerReservation(
    Request $request,
    int $id,
    ReservMatRepository $reservMatRepository,  // Changed parameter name
    EntityManagerInterface $entityManager,
    MailerInterface $mailer
): Response {
    $reservation = $reservMatRepository->find($id);
    
    if (!$reservation) {
        throw $this->createNotFoundException('Réservation non trouvée');
    }

    $message = $request->request->get('message');
    
    // Update status
    $reservation->setStatut('annulée');
    $entityManager->flush();
    
    // Send cancellation email
    $email = (new Email())
        ->from('
service.goldentouch1@gmail.com')
->to($reservation->getUser()->getEmail()) // Changé de getUtilisateur() à getUser()
->subject('Annulation de votre réservation')
        ->text($message);
    
    $mailer->send($email);

    $this->addFlash('warning', 'La réservation a été annulée et un email a été envoyé.');
    return $this->redirectToRoute('app_mes_reservations');
}
#[Route('/statistique/materiels', name: 'statistique_materiels')]
public function statistiques(ReservMatRepository $reservMatRepository): Response
{
    // Statistiques par matériel
    $reservationsByMateriel = $reservMatRepository->countReservationsByMateriel();
    
    $materiels = [];
    $nombreReservations = [];
    $totalMateriel = array_sum(array_column($reservationsByMateriel, 'count'));

    foreach ($reservationsByMateriel as $reservation) {
        $materiels[] = $reservation['nom_mat'];
        $nombreReservations[] = round(($reservation['count'] / $totalMateriel) * 100, 2);
    }

    // Statistiques par mois
    $reservations = $reservMatRepository->findAll();
    $moisCounts = [];

    foreach ($reservations as $reservation) {
        $event = $reservation->getEvent();
        if ($event && $event->getDate()) {
            $mois = $event->getDate()->format('Y-m');
            if (!isset($moisCounts[$mois])) {
                $moisCounts[$mois] = 0;
            }
            $moisCounts[$mois]++;
        }
    }

    $totalReservations = array_sum($moisCounts);
    $moisPourcentages = [];
    
    foreach ($moisCounts as $mois => $count) {
        $moisPourcentages[$mois] = round(($count / $totalReservations) * 100, 2);
    }

    arsort($moisPourcentages);
    // Ajout pour statistiques des réservations par état
$etatCounts = [
    'Confirmée' => 0,
    'Non Confirmée' => 0,
    'Annulée' => 0,
];

foreach ($reservations as $reservation) {
    $etat = $reservation->getStatut(); // Supposons que getEtat() renvoie un string ou un code
    if ($etat === 'confirmée') {
        $etatCounts['Confirmée']++;
    } elseif ($etat === 'non confirmé') {
        $etatCounts['Non Confirmée']++;
    } elseif ($etat === 'annulée') {
        $etatCounts['Annulée']++;
    }
}

// Calcul du total des réservations pourcentage état
$totalEtat = array_sum($etatCounts);
$etatPourcentages = [];
foreach ($etatCounts as $etat => $count) {
    $etatPourcentages[$etat] = ($totalEtat > 0) ? round(($count / $totalEtat) * 100, 2) : 0;
}

    return $this->render('materiels/reservation_stats.html.twig', [
        'materiels' => $materiels,
        'pourcentages' => $nombreReservations,
        'moisPourcentages' => $moisPourcentages,
        'etatPourcentages' => $etatPourcentages, // <-- ajout ici

    ]);
}
}