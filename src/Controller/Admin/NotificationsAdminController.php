<?php

namespace App\Controller\Admin;

use App\Entity\NotificationsAdmin;
use App\Repository\NotificationsAdminRepository;
use App\Repository\DemandePackRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class NotificationsAdminController extends AbstractController
{
    private NotificationsAdminRepository $notificationsAdminRepository;
    private EntityManagerInterface $entityManager;
    private DemandePackRepository $demandePackRepository;
    private UtilisateurRepository $utilisateurRepository;

    public function __construct(
        NotificationsAdminRepository $notificationsAdminRepository,
        EntityManagerInterface $entityManager,
        DemandePackRepository $demandePackRepository,
        UtilisateurRepository $utilisateurRepository
    ) {
        $this->notificationsAdminRepository = $notificationsAdminRepository;
        $this->entityManager = $entityManager;
        $this->demandePackRepository = $demandePackRepository;
        $this->utilisateurRepository = $utilisateurRepository;
    }

    #[Route('/notifications', name: 'admin_notifications')]
    public function index(Request $request): Response
    {
        $adminId = 1;
        $q = $request->query->get('q');
        $status = $request->query->get('status', 'all');
        $date = $request->query->get('date');

        $qb = $this->notificationsAdminRepository->createQueryBuilder('n')
            ->andWhere('n.admin = :adminId')
            ->setParameter('adminId', $adminId);

        if ($status !== 'all' && in_array($status, ['LU', 'NON_LU'])) {
            $qb->andWhere('n.statut = :status')->setParameter('status', $status);
        }
        if ($date && preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
            $start = $date . ' 00:00:00';
            $end = $date . ' 23:59:59';
            $qb->andWhere('n.date_creation BETWEEN :start AND :end')
                ->setParameter('start', $start)
                ->setParameter('end', $end);
        }

        if ($q && trim($q) !== '') {
            $qLower = mb_strtolower($q);
            // Try to match YYYY-MM-DD or YYYY-MM or YYYY
            if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $qLower)) {
                [$year, $month, $day] = explode('-', $qLower);
                $qb->andWhere('LOWER(n.message) LIKE :q OR (YEAR(n.date_creation) = :year AND MONTH(n.date_creation) = :month AND DAY(n.date_creation) = :day)')
                    ->setParameter('q', "%$qLower%")
                    ->setParameter('year', $year)
                    ->setParameter('month', $month)
                    ->setParameter('day', $day);
            } elseif (preg_match('/^\d{4}-\d{2}$/', $qLower)) {
                [$year, $month] = explode('-', $qLower);
                $qb->andWhere('LOWER(n.message) LIKE :q OR (YEAR(n.date_creation) = :year AND MONTH(n.date_creation) = :month)')
                    ->setParameter('q', "%$qLower%")
                    ->setParameter('year', $year)
                    ->setParameter('month', $month);
            } elseif (preg_match('/^\d{4}$/', $qLower)) {
                $qb->andWhere('LOWER(n.message) LIKE :q OR YEAR(n.date_creation) = :year')
                    ->setParameter('q', "%$qLower%")
                    ->setParameter('year', $qLower);
            } else {
                $qb->andWhere('LOWER(n.message) LIKE :q')
                    ->setParameter('q', "%$qLower%") ;
            }
        }

        $notifications = $qb
            ->orderBy('n.date_creation', 'DESC')
            ->getQuery()
            ->getResult();

        $unreadCount = $this->notificationsAdminRepository->countUnreadByAdminId($adminId);
        $filter = $request->query->get('filter', 'all'); // keep for compatibility
        // For bell dropdown: latest 4 notifications
        $latestNotifications = $this->notificationsAdminRepository->createQueryBuilder('n')
            ->andWhere('n.admin = :adminId')
            ->setParameter('adminId', $adminId)
            ->orderBy('n.date_creation', 'DESC')
            ->setMaxResults(4)
            ->getQuery()
            ->getResult();
        if ($request->isXmlHttpRequest()) {
    return $this->render('admin/notifications/_table_rows.html.twig', [
        'notifications' => $notifications
    ]);
}
return $this->render('admin/notifications/index.html.twig', [
    'notifications' => $notifications,
    'unreadCount' => $unreadCount,
    'currentFilter' => $filter,
    'latestNotifications' => $latestNotifications
]);
    }

    #[Route('/notifications/mark-read/{id}', name: 'admin_notifications_mark_read')]
    public function markAsRead(NotificationsAdmin $notification): JsonResponse
    {
        $notification->setStatut('LU');
        $this->entityManager->flush();
        
        return new JsonResponse(['success' => true]);
    }

    #[Route('/notifications/mark-all-read', name: 'admin_notifications_mark_all_read')]
    public function markAllAsRead(Request $request): JsonResponse
    {
        $adminId = 1; // Placeholder - replace with actual admin ID from authentication
        
        $updatedRows = $this->notificationsAdminRepository->markAllAsReadByAdminId($adminId);
        
        return new JsonResponse([
            'success' => true,
            'updatedCount' => $updatedRows
        ]);
    }

    #[Route('/notifications/count', name: 'admin_notifications_count')]
    public function getUnreadCount(): JsonResponse
    {
        $adminId = 1; // Placeholder - replace with actual admin ID from authentication
        
        $unreadCount = $this->notificationsAdminRepository->countUnreadByAdminId($adminId);
        
        return new JsonResponse([
            'count' => $unreadCount
        ]);
    }

    #[Route('/notifications/view/{id}', name: 'admin_notifications_view')]
    public function viewNotification(NotificationsAdmin $notification): Response
    {
        // Mark notification as read
        $notification->setStatut('LU');
        $this->entityManager->flush();
        
        // Get the related demande pack
        $demandePack = $notification->getDemandePack();
        
        if (!$demandePack) {
            $this->addFlash('error', 'Could not find the requested pack');
            return $this->redirectToRoute('admin_notifications');
        }
        
        // Redirect to the customize pack page
        return $this->redirectToRoute('admin_customize_pack_show', [
            'id' => $demandePack->getId()
        ]);
    }

    /**
     * Get notifications filtered by the specified criteria
     */
    private function getFilteredNotifications(int $adminId, string $filter): array
    {
        switch ($filter) {
            case 'unread':
                return $this->notificationsAdminRepository->findUnreadByAdminId($adminId);
            case 'read':
                return $this->notificationsAdminRepository->findReadByAdminId($adminId);
            case 'today':
                return $this->notificationsAdminRepository->findTodayByAdminId($adminId);
            case 'week':
                return $this->notificationsAdminRepository->findThisWeekByAdminId($adminId);
            default:
                return $this->notificationsAdminRepository->findByAdminId($adminId);
        }
    }

    /**
     * Format date for display
     */
    private function formatDateTime(\DateTimeInterface $dateTime): string
    {
        $now = new \DateTime();
        $today = new \DateTime('today');
        $yesterday = new \DateTime('yesterday');
        
        if ($dateTime->format('Y-m-d') === $today->format('Y-m-d')) {
            return 'Today ' . $dateTime->format('H:i');
        } elseif ($dateTime->format('Y-m-d') === $yesterday->format('Y-m-d')) {
            return 'Yesterday ' . $dateTime->format('H:i');
        } else {
            return $dateTime->format('d M, H:i');
        }
    }

    #[Route('/notifications/delete/{id}', name: 'admin_notifications_delete', methods: ['DELETE'])]
    public function deleteNotification(NotificationsAdmin $notification): JsonResponse
    {
        try {
            $this->entityManager->remove($notification);
            $this->entityManager->flush();
            
            return new JsonResponse([
                'success' => true,
                'message' => 'Notification deleted successfully'
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Error deleting notification'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/notifications/bulk-delete', name: 'admin_notifications_bulk_delete', methods: ['POST'])]
    public function bulkDelete(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $ids = $data['ids'] ?? [];
        if (empty($ids)) {
            return new JsonResponse(['success' => false, 'message' => 'Aucune notification sélectionnée.'], 400);
        }
        try {
            $notifications = $this->notificationsAdminRepository->findBy(['id' => $ids]);
            foreach ($notifications as $notification) {
                $this->entityManager->remove($notification);
            }
            $this->entityManager->flush();
            return new JsonResponse(['success' => true]);
        } catch (\Throwable $e) {
            return new JsonResponse(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    #[Route('/notifications/bulk-mark-read', name: 'admin_notifications_bulk_mark_read', methods: ['POST'])]
    public function bulkMarkRead(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $ids = $data['ids'] ?? [];
        if (empty($ids)) {
            return new JsonResponse(['success' => false, 'message' => 'Aucune notification sélectionnée.'], 400);
        }
        try {
            $notifications = $this->notificationsAdminRepository->findBy(['id' => $ids]);
            foreach ($notifications as $notification) {
                $notification->setStatut('LU');
            }
            $this->entityManager->flush();
            return new JsonResponse(['success' => true]);
        } catch (\Throwable $e) {
            return new JsonResponse(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}