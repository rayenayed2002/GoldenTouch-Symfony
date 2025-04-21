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
        // Show ALL notifications for admin_id = 1 in the table
        $adminId = 1;
        $notifications = $this->notificationsAdminRepository->createQueryBuilder('n')
            ->andWhere('n.admin = :adminId')
            ->setParameter('adminId', $adminId)
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
}