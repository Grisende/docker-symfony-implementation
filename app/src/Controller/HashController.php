<?php
namespace App\Controller;

use App\Service\HashService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\RateLimiter\RateLimiterFactory;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\DependencyInjection\Loader\Configurator\param;

class HashController extends AbstractController
{
    public function __construct(private readonly HashService $hashService)
    {
    }

    #[Route(path: '/hashes/create', name: 'hash_create', methods: ['POST'])]
    public function createHash(Request $request, RateLimiterFactory $anonymousApiLimiter): Response
    {
        $this->hashService->createHash($request->get('input_string'), (int)$request->get('requests_number', 5));
        return new JsonResponse(['message' => 'success', 'status' => 200]);
    }

    #[Route(path: '/hashes', name: 'hash_get', methods: ['GET'])]
    public function getHash(Request $request): Response
    {
        $params['limit'] = $request->query->get('limit', 10);
        $params['page'] = $request->query->get('after', 1);

        $hashes = $this->hashService->getHash((int)$request->get('attempts'), $params);
        return new JsonResponse($hashes);
    }
}