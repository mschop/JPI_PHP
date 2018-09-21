<?php

namespace App\Controller;


use App\DbConnectionProviderInterface;
use App\Dto\TenantDto;
use App\Mapping\MapperInterface;
use App\Schema\tMandant;
use function Functional\map;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;

class TenantController
{
    protected $connProvider;
    protected $mapper;

    public function __construct(DbConnectionProviderInterface $connProvider, MapperInterface $mapper)
    {
        $this->connProvider = $connProvider;
        $this->mapper = $mapper;
    }

    /**
     * @Route("/tenant", methods={"GET"})
     * @OA\Get(
     *     path="/tenant",
     *     description="Fetch all created tenants in JTL-Wawi installation.",
     *     @OA\Response(
     *          response="200",
     *          description="Successfull operation",
     *          @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/TenantDto"))
     *     )
     * )
     */
    public function getAll()
    {
        return new JsonResponse(map($this->connProvider->getAllTenants(), function($tenant) {
            $dto = new TenantDto();
            $dto->id = $tenant[tMandant::kMandant];
            $dto->name = $tenant[tMandant::cName];
            $dto->dbName = $tenant[tMandant::cDB];
            return $dto;
        }));
    }
}