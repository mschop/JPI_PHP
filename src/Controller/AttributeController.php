<?php

namespace App\Controller;


use App\Db\Repository\AttributeRepository;
use App\Enums\AttributeRelationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;

class AttributeController extends Controller
{
    protected $attributeRepository;

    /**
     * AttributeController constructor.
     * @param AttributeRepository $attributeRepository
     */
    public function __construct(AttributeRepository $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }


    /**
     * @var int $tenantId
     * @return JsonResponse
     * @Route("/Tenant/{tenantId}/Attribute/Product")
     * @OA\Get(
     *     path="/Tenant/{tenantId}/Attribute/Product",
     *     description="Fetch product attribute definitions",
     *     @OA\Response(
     *         description="All defined product attributes",
     *         response="200",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Attribute"))
     *     )
     * )
     */
    public function getAllProductAttributes(int $tenantId)
    {
        if ($tenantId <= 0) throw new BadRequestHttpException('Invalid tenantId');
        return new JsonResponse($this->attributeRepository->getAttributes($tenantId, AttributeRelationType::byValue(AttributeRelationType::PRODUCT)));
    }

    /**
     * @param int $tenantId
     * @return JsonResponse
     * @Route("/Tenant/{tenantId}/Attribute/Category")
     * @OA\Get(
     *     path="/Tenant/{tenantId}/Attribute/Category",
     *     description="Fetch product attribute definitions",
     *     @OA\Response(
     *         description="All defined product attributes",
     *         response="200",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Attribute"))
     *     )
     * )
     */
    public function getAllCategoryAttributes(int $tenantId)
    {
        if ($tenantId <= 0) throw new BadRequestHttpException('Invalid tenantId');
        return new JsonResponse($this->attributeRepository->getAttributes($tenantId, AttributeRelationType::byValue(AttributeRelationType::CATEGORY)));
    }
}