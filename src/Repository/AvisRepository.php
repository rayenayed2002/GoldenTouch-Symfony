<?php

namespace App\Repository;

use App\Entity\Avis;
use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Avis>
 *
 * @method Avis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Avis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Avis[]    findAll()
 * @method Avis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avis::class);
    }

    public function save(Avis $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Avis $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    
    /**
     * Trouve les avis pour un pack spécifique avec les informations des utilisateurs
     * 
     * @param int $packId ID du pack
     * @param array $orderBy Critères de tri
     * @return array
     */
    public function findAvisWithUserInfo(int $packId, array $orderBy = ['dateCreation' => 'DESC']): array
    {
        return $this->createQueryBuilder('a')
            ->select('a', 'u', 'p')
            ->innerJoin('a.utilisateur', 'u')
            ->innerJoin('a.pack', 'p')
            ->where('p.id = :packId')
            ->setParameter('packId', $packId)
            ->orderBy('a.dateCreation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findAvisWithUserInfoAlternative(int $packId): array
    {
        return $this->createQueryBuilder('a')
            ->select('a, u.nom, u.prenom')
            ->leftJoin('App\Entity\Utilisateur', 'u', 'WITH', 'a.id_utilisateur = u.id')
            ->where('a.id_pack = :packId')
            ->setParameter('packId', $packId)
            ->orderBy('a.date_creation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function getAverageRatingForPack(int $packId): ?float
    {
        $entityManager = $this->getEntityManager();
        
        $query = $entityManager->createQuery(
            'SELECT AVG(a.note) 
            FROM App\\Entity\\Avis a 
            WHERE a.id_pack = :packId'
        )->setParameter('packId', $packId);
        
        return $query->getSingleScalarResult();
    }

    public function findRecentAvis(int $limit = 5): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.date_creation', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findAvisBySentiment(string $sentiment): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.sentiment = :sentiment')
            ->setParameter('sentiment', $sentiment)
            ->orderBy('a.date_creation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function countAvisByPack(int $packId): int
    {
        $entityManager = $this->getEntityManager();
        
        $query = $entityManager->createQuery(
            'SELECT COUNT(a.id) 
            FROM App\\Entity\\Avis a 
            WHERE a.id_pack = :packId'
        )->setParameter('packId', $packId);
        
        return $query->getSingleScalarResult();
    }
}
