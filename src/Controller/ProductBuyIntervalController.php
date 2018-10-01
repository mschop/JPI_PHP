<?php

namespace App\Controller;


use App\Db\ConnectionProviderInterface;
use App\Db\Repository\ProductBuyIntervalRepository;
use App\Db\Repository\ProductRepository;
use App\Db\TenantNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;

class ProductBuyIntervalController extends Controller
{
    protected $connectionProvider;
    protected $productRepository;
    protected $productBuyIntervalRepository;

    /**
     * ProductBuyIntervalController constructor.
     * @param ProductBuyIntervalRepository $productBuyIntervalRepository
     */
    public function __construct(
        ConnectionProviderInterface $connectionProvider,
        ProductRepository $productRepository,
        ProductBuyIntervalRepository $productBuyIntervalRepository
    ) {
        $this->connectionProvider = $connectionProvider;
        $this->productRepository = $productRepository;
        $this->productBuyIntervalRepository = $productBuyIntervalRepository;
    }

    /**
     * @Route("/Tenant/{tenantId}/Product/{productId}/BuyInterval")
     * @OA\Get(
     *     path="/Tenant/{tenantId}/Product/{productId}/BuyInterval",
     *     description="Get the products buy interval settings",
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
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/ProductBuyInterval"))
     *     ),
     *     @OA\Response(
     *         description="Bad Request",
     *         response="400"
     *     ),
     *     @OA\Response(
     *         description="Product not found",
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
        $result = $this->productBuyIntervalRepository->getAllOfProduct($tenantId, $productId);
        return new JsonResponse($result);
    }
}