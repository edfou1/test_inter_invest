<?php

namespace App\Repository;

use App\Entity\Societe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Societe>
 *
 * @method Societe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Societe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Societe[]    findAll()
 * @method Societe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SocieteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Societe::class);
    }

    public function add(Societe $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Societe $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function flush(): void
    {
        $this->getEntityManager()->flush();
    }

    /**
     * @param string $filterNom
     * @param string $filterSiren
     *
     * Compte les résultats en fontcion des filtres
     */
    public function countFilter(string $filterNom, string $filterSiren): int
    {
        $queryBuilder = $this->createQueryBuilder('s')
            ->select('count(s.id)')
            ->innerJoin('s.societeInfo', 'si')
            ->where('si.nom LIKE :nom')
            ->setParameter('nom', '%'.$filterNom.'%')
            ->andWhere('si.siren LIKE :siren')
            ->setParameter('siren', '%'.$filterSiren.'%')
        ;
        return $queryBuilder
            ->getQuery()
            ->getSingleScalarResult()
            ;
    }

    /**
     * @param int $page
     * @param int $pageSize
     * @param string $filterNom
     * @param string $filterSiren
     *
     * Récupère les infos basiques de toutes les societes ou suivant un filtre
     */
    public function findAllBasic(int $page, int $pageSize, string $filterNom, string $filterSiren): array
    {
        $queryBuilder = $this->createQueryBuilder('s')
            ->addSelect('s.id')
            ->innerJoin('s.societeInfo', 'si')
            ->addSelect('si.nom, si.siren')
            ->where('si.nom LIKE :nom')
            ->setParameter('nom', '%'.$filterNom.'%')
            ->andWhere('si.siren LIKE :siren')
            ->setParameter('siren', '%'.$filterSiren.'%')
        ;
        if ($page > 0 && $pageSize > 0) {
            $queryBuilder->setMaxResults($pageSize)
                ->setFirstResult(($page - 1) * $pageSize);
        }
        return $queryBuilder
            ->getQuery()
            ->getResult()
        ;
    }

//    /**
//     * @return Societe[] Returns an array of Societe objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Societe
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
