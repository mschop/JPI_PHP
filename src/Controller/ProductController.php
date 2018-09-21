<?php

namespace App\Controller;

use App\DbConnectionProviderInterface;
use App\Repository\ProductRepository;
use OpenApi\Annotations as OA;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class ProductController
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @param int $tenantId
     * @param int $productId
     * @return Response
     * @throws
     * @Route("/tenant/{tenantId}/product/{productId}")
     * @OA\Get(
     *     path="/product/{productId}",
     *     description="Get a specific product",
     *     @OA\Parameter(
     *         in="path",
     *         name="tenantId",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         in="path",
     *         name="productId",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         description="Successful",
     *         response="200",
     *         @OA\JsonContent(ref="#/components/schemas/ProductDto")
     *     ),
     *     @OA\Response(
     *         description="Product not found",
     *         response="404"
     *     )
     * )
     */
    public function get(int $tenantId, int $productId, Request $request): Response
    {
        if ($tenantId <= 0) throw new BadRequestHttpException('The tenant id must be greater than 0');
        if ($productId <= 0) throw new BadRequestHttpException('The product id must be greater than 0');
        $joins = explode(',', $request->query->get('join', ''));
        $product = $this->productRepository->get($tenantId, $productId, $joins);
        if (!$product) throw new NotFoundHttpException('Product not found');
        return new JsonResponse($product);
    }
}