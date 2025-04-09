<?php

namespace App\Repository;

use App\Entity\NotificationsAdmin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use DateTime;

/**
 * @extends ServiceEntityRepository<NotificationsAdmin>
 */
class NotificationsAdminRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NotificationsAdmin::class);
    }

    /**
     * Find all notifications for a specific admin
     * 
     * @param int $adminId The admin ID
     * @return NotificationsAdmin[] Returns an array of NotificationsAdmin objects
     */
    public function findByAdminId(int $adminId): array
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.admin = :adminId')
            ->setParameter('adminId', $adminId)
            ->orderBy('n.date_creation', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * Find unread notifications for a specific admin
     * 
     * @param int $adminId The admin ID
     * @return NotificationsAdmin[] Returns an array of unread NotificationsAdmin objects
     */
    public function findUnreadByAdminId(int $adminId): array
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.admin = :adminId')
            ->andWhere('n.statut = :statut')
            ->setParameter('adminId', $adminId)
            ->setParameter('statut', 'NON_LU')
            ->orderBy('n.date_creation', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * Find read notifications for a specific admin
     * 
     * @param int $adminId The admin ID
     * @return NotificationsAdmin[] Returns an array of read NotificationsAdmin objects
     */
    public function findReadByAdminId(int $adminId): array
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.admin = :adminId')
            ->andWhere('n.statut = :statut')
            ->setParameter('adminId', $adminId)
            ->setParameter('statut', 'LU')
            ->orderBy('n.date_creation', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * Find today's notifications for a specific admin
     * 
     * @param int $adminId The admin ID
     * @return NotificationsAdmin[] Returns an array of today's NotificationsAdmin objects
     */
    public function findTodayByAdminId(int $adminId): array
    {
        $today = new DateTime('today');
        $tomorrow = new DateTime('tomorrow');
        
        return $this->createQueryBuilder('n')
            ->andWhere('n.admin = :adminId')
            ->andWhere('n.date_creation >= :today')
            ->andWhere('n.date_creation < :tomorrow')
            ->setParameter('adminId', $adminId)
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->orderBy('n.date_creation', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * Find this week's notifications for a specific admin
     * 
     * @param int $adminId The admin ID
     * @return NotificationsAdmin[] Returns an array of this week's NotificationsAdmin objects
     */
    public function findThisWeekByAdminId(int $adminId): array
    {
        $startOfWeek = new DateTime('monday this week');
        $endOfWeek = new DateTime('sunday this week 23:59:59');
        
        return $this->createQueryBuilder('n')
            ->andWhere('n.admin = :adminId')
            ->andWhere('n.date_creation >= :startOfWeek')
            ->andWhere('n.date_creation <= :endOfWeek')
            ->setParameter('adminId', $adminId)
            ->setParameter('startOfWeek', $startOfWeek)
            ->setParameter('endOfWeek', $endOfWeek)
            ->orderBy('n.date_creation', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * Mark all notifications as read for a specific admin
     * 
     * @param int $adminId The admin ID
     * @return int The number of updated rows
     */
    public function markAllAsReadByAdminId(int $adminId): int
    {
        return $this->createQueryBuilder('n')
            ->update()
            ->set('n.statut', ':statut')
            ->where('n.admin = :adminId')
            ->andWhere('n.statut = :unread')
            ->setParameter('adminId', $adminId)
            ->setParameter('statut', 'LU')
            ->setParameter('unread', 'NON_LU')
            ->getQuery()
            ->execute()
        ;
    }

    /**
     * Count unread notifications for a specific admin
     * 
     * @param int $adminId The admin ID
     * @return int The number of unread notifications
     */
    public function countUnreadByAdminId(int $adminId): int
    {
        return $this->createQueryBuilder('n')
            ->select('COUNT(n.id)')
            ->andWhere('n.admin = :adminId')
            ->andWhere('n.statut = :statut')
            ->setParameter('adminId', $adminId)
            ->setParameter('statut', 'NON_LU')
            ->getQuery()
            ->getSingleScalarResult()
        ;
    }
}
