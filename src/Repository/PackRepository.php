<?php

namespace App\Repository;

use App\Entity\Pack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

class PackRepository extends ServiceEntityRepository
{
    /**
     * Search packs by name or description
     * @param string $term
     * @return Pack[]
     */
    public function search(string $term): array
    {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.event', 'e');
        $qb->where($qb->expr()->like('p.description', ':term'))
           ->orWhere($qb->expr()->like('e.nom', ':term'))
           ->setParameter('term', '%' . $term . '%');
        return $qb->getQuery()->getResult();
    }

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pack::class);
    }

    public function findAvailablePacks(): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.description IS NOT NULL')
            ->andWhere('p.description != :empty')
            ->setParameter('empty', '')
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByCategory(string $category): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.categorie = :category')
            ->setParameter('category', $category)
            ->getQuery()
            ->getResult();
    }

    public function findTrendingPacks(int $limit = 3): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.capacite', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findAllPaginated(int $page, int $limit): array
    {
        $query = $this->createQueryBuilder('p')
            ->getQuery();
            
        $paginator = new Paginator($query);
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $limit);
        
        $query->setFirstResult(($page - 1) * $limit)
              ->setMaxResults($limit);
        
        return [
            'results' => $query->getResult(),
            'currentPage' => $page,
            'lastPage' => $pagesCount,
            'limit' => $limit,
            'totalItems' => $totalItems,
            'hasPreviousPage' => $page > 1,
            'hasNextPage' => $page < $pagesCount
        ];
    }
    
    public function findAll(): array
    {
        return $this->createQueryBuilder('p')
            ->getQuery()
            ->getResult();
    }
}