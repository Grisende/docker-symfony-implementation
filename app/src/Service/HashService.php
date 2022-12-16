<?php

namespace App\Service;

use App\Helper\HashHelper;
use App\Presenter\HashPresenter;
use App\Repository\HashRepository;
use App\Traits\SetTotalPagesTrait;

class HashService
{
    use SetTotalPagesTrait;
    public function __construct(private readonly HashRepository $hashRepository, private readonly HashHelper $helper, private readonly HashPresenter $presenter)
    {
    }

    public function createHash(string $inputString, int $requestsNumber): void
    {
        $hashes = $this->helper->generateHashes($inputString, $requestsNumber);
        $this->hashRepository->insertHashes($hashes);
    }

    public function getHash(int $attempts, array $params): array
    {
        $pagination = $this->setTotalPages($this->hashRepository->getTotalHashes($attempts), $params['limit'], $params['page']);
        $hashes = $this->hashRepository->getHashes($attempts, $params['limit'], $params['page']);

        return $this->presenter->presentBadges($hashes, $pagination);
    }
}