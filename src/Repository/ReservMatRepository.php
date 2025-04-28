<?php

namespace App\Repository;

use App\Entity\ReservMat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservMat>
 */
class ReservMatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservMat::class);
    }
    public function countByStatus(string $status): int
{
    return $this->count(['statut' => $status]);
}

public function getMonthlyStats(int $year = null): array
{
    $qb = $this->createQueryBuilder('r')
        ->select([
            "DATE_FORMAT(r.date_reserv, '%Y-%m') as month",
            "COUNT(r.id_reserv) as count",
            "SUM(r.quantite) as total_quantity"
        ])
        ->groupBy('month')
        ->orderBy('month', 'ASC');
        
    if ($year) {
        $qb->where("YEAR(r.date_reserv) = :year")
           ->setParameter('year', $year);
    }
    
    return $qb->getQuery()->getResult();
}

public function getTopMaterials(int $limit = 5): array
{
    return $this->createQueryBuilder('r')
        ->select('m.nom_mat, COUNT(r.id_reserv) as reservation_count, SUM(r.quantite) as total_quantity')
        ->join('r.materielle', 'm')
        ->groupBy('m.id_mat')
        ->orderBy('reservation_count', 'DESC')
        ->setMaxResults($limit)
        ->getQuery()
        ->getResult();
}

public function getTopEvents(int $limit = 5): array
{
    return $this->createQueryBuilder('r')
        ->select('e.nom, COUNT(r.id_reserv) as reservation_count, COUNT(DISTINCT r.materielle) as unique_materials')
        ->join('r.event', 'e')
        ->groupBy('e.id')
        ->orderBy('reservation_count', 'DESC')
        ->setMaxResults($limit)
        ->getQuery()
        ->getResult();
}

public function getTopUsers(int $limit = 5): array
{
    return $this->createQueryBuilder('r')
        ->select('u.prenom, u.nom, COUNT(r.id_reserv) as reservation_count, COUNT(DISTINCT r.materielle) as unique_materials')
        ->join('r.utilisateur', 'u')
        ->groupBy('u.id')
        ->orderBy('reservation_count', 'DESC')
        ->setMaxResults($limit)
        ->getQuery()
        ->getResult();
}

public function getQuantityDistribution(): array
{
    return $this->createQueryBuilder('r')
        ->select('r.quantite as quantity, COUNT(r.id_reserv) as count')
        ->groupBy('r.quantite')
        ->orderBy('r.quantite', 'ASC')
        ->getQuery()
        ->getResult();
}

public function getQuantityStats(): array
{
    return $this->createQueryBuilder('r')
        ->select('AVG(r.quantite) as avg_quantity, MAX(r.quantite) as max_quantity, MIN(r.quantite) as min_quantity')
        ->getQuery()
        ->getSingleResult();
}

    //    /**
    //     * @return ReservMat[] Returns an array of ReservMat objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?ReservMat
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
