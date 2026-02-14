<?php

declare(strict_types=1);

namespace App\HealthCheck\Infrastructure\Api\Http;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;


final class HealthCheckController extends AbstractController
{
    #[Route('/health-check', name: 'health_check', methods: ['GET'])]
    public function __invoke(): JsonResponse
    {
        return new JsonResponse([
            'status' => 'ok',
        ]);
    }
}
