<?php

namespace App\Repository;

use App\Entity\Materielle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Materielle>
 */
class MaterielleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Materielle::class);
    }
    public function findBySearchQuery($query)
    {
        return $this->createQueryBuilder('m')
            ->where('m.nomMat LIKE :query')
            ->orWhere('m.descriptionMat LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->getQuery()
            ->getResult();
    }
    public function search(string $term, string $sortBy = 'id_mat', string $direction = 'ASC'): array
    {
        return $this->createQueryBuilder('m')
            ->leftJoin('m.categorie', 'c')
            ->where('m.nom_mat LIKE :term 
                    OR m.description_mat LIKE :term 
                    OR c.nom_cat LIKE :term
                    OR m.id_mat = :id')
            ->setParameter('term', '%'.$term.'%')
            ->setParameter('id', is_numeric($term) ? (int)$term : 0)
            ->orderBy('m.'.$sortBy, $direction)
            ->getQuery()
            ->getResult();
    }
    


    /**
     * @return Materielle[]
     */
    public function findAll(): array
    {
        return $this->createQueryBuilder('m')
            ->select('m')
            ->getQuery()
            ->getResult();
    }

    public function findById(int $id): ?Materielle
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.id_mat = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
