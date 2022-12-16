<?php

namespace App\Entity;

use App\Repository\HashRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HashRepository::class)]
#[ORM\Table(name: "hashes")]

class Hash
{
    #[ORM\Column(name:"id", type:"integer", nullable:false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private ?int $id = null;

    #[ORM\Column(name:"batch_timestamp", type:"datetime", nullable:false)]
    private \DateTime $batchTimestamp;

    #[ORM\Column(name:"block_number", type:"integer", nullable:false)]
    private int $blockNumber;

    #[ORM\Column(name:"input_string", type:"string", nullable:false)]
    private string $inputString;

    #[ORM\Column(name:"key_matched", type:"string", nullable:false)]
    private string $keyMatched;

    #[ORM\Column(name:"hash_generated", type:"string", nullable:false)]
    private string $hashGenerated;

    #[ORM\Column(name:"attempts", type:"integer", nullable:false)]
    private int $attempts;

    public function __construct()
    {
        $this->batchTimestamp = new \DateTime('now');
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBatchTimestamp(): \DateTime
    {
        return $this->batchTimestamp;
    }

    public function setBatchTimestamp(\DateTime $batchTimestamp): ?\DateTime
    {
        return $this->batchTimestamp = $batchTimestamp;
    }

    /**
     * @return int
     */
    public function getBlockNumber(): int
    {
        return $this->blockNumber;
    }

    /**
     * @param int $blockNumber
     */
    public function setBlockNumber(int $blockNumber): ?int
    {
        return $this->blockNumber = $blockNumber;
    }

    /**
     * @return string
     */
    public function getInputString(): string
    {
        return $this->inputString;
    }

    /**
     * @param string $inputString
     */
    public function setInputString(string $inputString): ?string
    {
        return $this->inputString = $inputString;
    }

    /**
     * @return string
     */
    public function getHashGenerated(): string
    {
        return $this->hashGenerated;
    }

    /**
     * @param string $hashGenerated
     */
    public function setHashGenerated(string $hashGenerated): ?string
    {
        return $this->hashGenerated = $hashGenerated;
    }

    /**
     * @return string
     */
    public function getKeyMatched(): string
    {
        return $this->keyMatched;
    }

    /**
     * @param string $keyMatched
     */
    public function setKeyMatched(string $keyMatched): ?string
    {
        return $this->keyMatched = $keyMatched;
    }

    /**
     * @return int
     */
    public function getAttempts(): int
    {
        return $this->attempts;
    }

    /**
     * @param int $attempts
     */
    public function setAttempts(int $attempts): ?int
    {
        return $this->attempts = $attempts;
    }
}