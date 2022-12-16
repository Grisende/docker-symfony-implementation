<?php

namespace App\Repository;

use App\Entity\Hash;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

class HashRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hash::class);
    }

    public function insertHashes(array $hashes) : void
    {
        foreach ($hashes as $hash){
            $hashEntity = new Hash();
            $hashEntity->setBatchTimestamp($hash['batch_timestamp']);
            $hashEntity->setBlockNumber($hash['block_number']);
            $hashEntity->setInputString($hash['input_string']);
            $hashEntity->setKeyMatched($hash['key_matched']);
            $hashEntity->setHashGenerated($hash['hash_generated']);
            $hashEntity->setAttempts($hash['attempts']);

            $this->_em->persist($hashEntity);
            $this->_em->flush();
        }
    }

    public function getTotalHashes(int $attempts): int
    {
        return $this->createQueryBuilder('h')
            ->select('count(1) as total')
            ->where('h.attempts < :attempts')
            ->setParameter('attempts', $attempts)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getHashes(int $attempts, int $limit, int $page)
    {
        if ($limit > 50) {
            $limit = 20;
        }

        $offset = ($page - 1) * $limit;

        return $this->createQueryBuilder('h')
        ->select('h.batchTimestamp, h.blockNumber, h.inputString, h.keyMatched')
        ->where('h.attempts < :attempts')
        ->setParameter('attempts', $attempts)
        ->setMaxResults($limit)
        ->setFirstResult($offset)
        ->getQuery()
        ->getResult();
    }
}
