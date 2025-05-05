<?php

namespace App\Repository;

use App\Entity\ReservationLieu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservationLieu>
 */
class ReserverLieuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationLieu::class);
    }

    public function add(ReservationLieu $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    

    public function remove(ReservationLieu $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find reservations by user ID
     */
    public function findByUserId(int $userId)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.user_id = :val')
            ->setParameter('val', $userId)
            ->orderBy('r.date_reservation', 'DESC')
            ->getQuery();
    }

    /**
     * Compte le nombre de réservations de lieux pour le mois en cours
     */
    public function countThisMonthReservations(): int
    {
        $start = new \DateTime('first day of this month 00:00:00');
        $end = new \DateTime('last day of this month 23:59:59');
        return (int) $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->andWhere('r.date_reservation BETWEEN :start AND :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Retourne le lieu le plus réservé du mois en cours
     */
    public function getMostReservedLieuThisMonth(): ?array
    {
        $start = new \DateTime('first day of this month 00:00:00');
        $end = new \DateTime('last day of this month 23:59:59');
        $qb = $this->createQueryBuilder('r')
            ->select('IDENTITY(r.lieu) as lieu_id, COUNT(r.id) as reservations')
            ->andWhere('r.date_reservation BETWEEN :start AND :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->groupBy('lieu_id')
            ->orderBy('reservations', 'DESC')
            ->setMaxResults(1);
        $result = $qb->getQuery()->getOneOrNullResult();
        if ($result && $result['lieu_id']) {
            // Récupérer le nom du lieu
            $lieu = $this->getEntityManager()->getRepository('App\\Entity\\Lieu')->find($result['lieu_id']);
            if ($lieu) {
                return [
                    'name' => $lieu->getName(),
                    'reservations' => $result['reservations']
                ];
            }
        }
        return null;
    }
    // src/Repository/ReserverLieuRepository.php
    public function getMonthlyReservations(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        
        $sql = '
            SELECT 
                MONTH(r.date_reservation) as month,
                YEAR(r.date_reservation) as year,
                COUNT(r.id) as total
            FROM reserver_lieu r
            WHERE r.date_reservation >= :startDate
            GROUP BY year, month
            ORDER BY year ASC, month ASC
        ';
        
        return $conn->executeQuery($sql, [
            'startDate' => (new \DateTime('-6 months'))->format('Y-m-d')
        ])->fetchAllAssociative();
    }
    
    public function getMonthlyRevenue(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        
        $sql = '
            SELECT 
                MONTH(r.date_reservation) as month,
                YEAR(r.date_reservation) as year,
                SUM(l.price) as revenue
            FROM reserver_lieu r
            JOIN lieu l ON r.lieu_id = l.id
            WHERE r.date_reservation >= :startDate
            GROUP BY year, month
            ORDER BY year ASC, month ASC
        ';
        
        return $conn->executeQuery($sql, [
            'startDate' => (new \DateTime('-6 months'))->format('Y-m-d')
        ])->fetchAllAssociative();
    }
}