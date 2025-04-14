<?php

namespace App\Repository;

use App\Entity\Lieu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Lieu>
 */
class LieuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lieu::class);
    }

    public function findAllPaginated(int $page = 1, int $limit = 10): array
    {
        $offset = ($page - 1) * $limit;

        return $this->createQueryBuilder('l')
            ->orderBy('l.id', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
    public function searchByName(string $searchTerm): array
    {
        return $this->createQueryBuilder('l')
            ->where('l.name LIKE :searchTerm')
            ->orWhere('l.location LIKE :searchTerm')
            ->orWhere('l.ville LIKE :searchTerm')
            ->orWhere('l.category LIKE :searchTerm')
            ->setParameter('searchTerm', '%'.$searchTerm.'%')
            ->orderBy('l.name', 'ASC')
            ->getQuery()
            ->getResult();
    }


    public function findPopularLieux(int $limit = 3): array
    {
        return $this->createQueryBuilder('l')
            ->orderBy('l.price', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findNewLieux(int $limit = 3): array
    {
        return $this->createQueryBuilder('l')
            ->orderBy('l.id', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findByCategoryPaginated(string $category, int $page = 1, int $limit = 10): array
    {
        $offset = ($page - 1) * $limit;

        return $this->createQueryBuilder('l')
            ->where('l.category = :category')
            ->setParameter('category', $category)
            ->orderBy('l.id', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
    public function getLocationStats(): array
{
    $conn = $this->getEntityManager()->getConnection();

    // Statistiques globales
    $stats = $conn->executeQuery('
        SELECT 
            COUNT(*) as total_locations,
            AVG(price) as avg_price,
            SUM(capacity) as total_capacity
        FROM lieu
    ')->fetchAssociative();

    // Répartition par catégorie
    $stats['by_category'] = $conn->executeQuery('
        SELECT category, COUNT(*) as count 
        FROM lieu 
        GROUP BY category
        ORDER BY count DESC
    ')->fetchAllAssociative();

    // Top 5 des lieux les plus chers
    $stats['most_expensive'] = $conn->executeQuery('
        SELECT name, price 
        FROM lieu 
        ORDER BY price DESC 
        LIMIT 5
    ')->fetchAllAssociative();

    return $stats;
}

public function getMonthlyStats(): array
{
    return $this->getEntityManager()->getConnection()->executeQuery('
        SELECT 
            DATE_FORMAT(CURRENT_DATE(), "%Y-%m") as month,
            COUNT(*) as locations_added,
            (SELECT COUNT(*) FROM lieu WHERE DATE_FORMAT(created_at, "%Y-%m") = DATE_FORMAT(DATE_SUB(CURRENT_DATE(), INTERVAL 1 MONTH), "%Y-%m")) as prev_month_count,
            (SELECT AVG(price) FROM lieu) as avg_price
        FROM lieu
        WHERE DATE_FORMAT(created_at, "%Y-%m") = DATE_FORMAT(CURRENT_DATE(), "%Y-%m")
    ')->fetchAssociative();
}
}
