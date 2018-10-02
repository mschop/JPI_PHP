<?php

namespace App\Controller;


use App\Db\Repository\ProductDescriptionRepository;
use App\Db\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;

class ProductDescriptionController extends Controller
{
    protected $productRepository;
    protected $productDescriptionRepository;

    /**
     * ProductDescriptionController constructor.
     * @param ProductRepository $productRepository
     * @param ProductDescriptionRepository $productDescriptionRepository
     */
    public function __construct(
        ProductRepository $productRepository,
        ProductDescriptionRepository $productDescriptionRepository
    ) {
        $this->productRepository = $productRepository;
        $this->productDescriptionRepository = $productDescriptionRepository;
    }

    /**
     * @Route("/Tenant/{tenantId}/Product/{productId}/Description")
     * @OA\Get(
     *     path="/Tenant/{tenantId}/Product/{productId}/Description",
     *     description="Fetch all descriptions from a specific product",
     *     @OA\Parameter(
     *         in="path",
     *         name="tenantId",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Parameter(
     *         in="path",
     *         name="productId",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         description="Successful",
     *         response="200",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/ProductDescription"))
     *     ),
     *     @OA\Response(
     *         description="Bad Request",
     *         response="400"
     *     ),
     *     @OA\Response(
     *         description="Not Found",
     *         response="404"
     *     )
     * )
     */
    public function getAll(int $tenantId, int $productId)
    {
        $this->denyAccessUnlessGranted('ROLE_PRODUCT_VIEW');
        if ($tenantId <= 0) throw new BadRequestHttpException('tenantId must be gt 0');
        if ($productId <= 0) throw new BadRequestHttpException('productId must be gt 0');
        if (!$this->productRepository->has($tenantId, $productId)) throw $this->createNotFoundException('Product not found');
        return new JsonResponse($this->productDescriptionRepository->getAll($tenantId, $productId));
    }
}