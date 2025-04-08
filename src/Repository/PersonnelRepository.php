<?php

namespace App\Repository;

use App\Entity\Personnel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Personnel>
 */
class PersonnelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Personnel::class);
    }

    /**
     * @return Personnel[]
     */
    public function findAll(): array
    {
        return $this->createQueryBuilder('p')
            ->select('p')  // Select the entire entity
            ->getQuery()
            ->getResult();
    }

    public function findById(int $id): ?Personnel
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.idP = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
