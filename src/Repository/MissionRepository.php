<?php
namespace src\Repository;

/**
 * @method Mission|null find($id)
 * @method Mission|null findOneBy(array $criteria, array $orderBy=null)
 * @method Mission[]    findAll()
 * @method Mission[]    findBy(array $criteria, array $orderBy=null, $limit=null, $offset=null)
 */
class MissionRepository extends Repository
{

    public function find($id): ?Mission
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.id = :val')
            ->setParameter('val', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findOneBy(array $criteria, array $orderBy=[]): ?Mission
    {
        $collection = $this->findBy($criteria, $orderBy, 1);
        return empty($collection) ? null : array_shift($collection);
    }

    public function findAll(): Collection
    {
        return $this->findBy([], ['m.title'=>'ASC']);
    }

    public function findBy(array $criteria, array $orderBy=[], $limit=-1, $offset=0): Collection
    {
        return $this->createQueryBuilder('m')
            ->orderBy($orderBy)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
