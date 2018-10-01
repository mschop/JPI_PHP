<?php

namespace App\Controller;

use App\Db\Repository\ProductRepository;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @param int $tenantId
     * @param int $productId
     * @param Request $request
     * @return Response
     * @throws
     * @Route("/Tenant/{tenantId}/Product/{productId}")
     * @OA\Get(
     *     path="/Tenant/{tenantId}/Product/{productId}",
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
     *         @OA\JsonContent(ref="#/components/schemas/Product")
     *     ),
     *     @OA\Response(
     *         description="Product not found",
     *         response="404"
     *     )
     * )
     */
    public function getOne(int $tenantId, int $productId, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_PRODUCT_VIEW');
        if ($tenantId <= 0) throw new BadRequestHttpException('The tenant id must be greater than 0');
        if ($productId <= 0) throw new BadRequestHttpException('The product id must be greater than 0');
        $joins = explode(',', $request->query->get('join', ''));
        $product = $this->productRepository->get($tenantId, $productId, $joins);
        if (!$product) throw new NotFoundHttpException('Product not found');
        return new JsonResponse($product);
    }
}