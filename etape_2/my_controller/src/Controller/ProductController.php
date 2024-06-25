<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product/{id}', name: 'product_show', methods: ['GET'])]
    public function show(int $id): JsonResponse
    {
        return new JsonResponse(['id' => $id]);
    }
}
