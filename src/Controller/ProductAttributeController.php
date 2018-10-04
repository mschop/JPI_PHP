<?php

namespace App\Controller;


use App\Db\Repository\ProductAttributeRepository;
use App\Db\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;

class ProductAttributeController extends Controller
{
    protected $productRepository;
    protected $productAttributeRepository;

    /**
     * ProductAttributeController constructor.
     * @param ProductAttributeRepository $productRepository
     * @param ProductAttributeRepository $productAttributeRepository
     */
    public function __construct(
        ProductRepository $productRepository,
        ProductAttributeRepository $productAttributeRepository
    ) {
        $this->productRepository = $productRepository;
        $this->productAttributeRepository = $productAttributeRepository;
    }

    /**
     * @var int $tenantId
     * @var int $productId
     * @return Response
     * @Route("/Tenant/{tenantId}/Product/{productId}/Attribute")
     * @OA\Get(
     *     path="/Tenant/{tenantId}/Product/{productId}/Attribute",
     *     description="Fetch all attribute values from product",
     *     @OA\Response(
     *         response="200",
     *         description="Success",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/ProductAttribute"))
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Not Found"
     *     ),
     *     @OA\Response(
     *         response="403",
     *         description="Forbidden"
     *     )
     * )
     */
    public function getAll(int $tenantId, int $productId)
    {
        $this->denyAccessUnlessGranted('ROLE_PRODUCT_VIEW');
        if ($tenantId <= 0) throw new BadRequestHttpException('Invalid tenantId');
        if ($productId <= 0) throw new BadRequestHttpException('Invalid productId');
        if (!$this->productRepository->has($tenantId, $productId)) throw $this->createNotFoundException('Product not found');
        return new JsonResponse($this->productAttributeRepository->getAll($tenantId, $productId));
    }
}