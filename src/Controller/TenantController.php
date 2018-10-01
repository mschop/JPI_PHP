<?php

namespace App\Controller;


use App\Db\ConnectionProviderInterface;
use App\Db\Schema\tMandant;
use App\Schema\Tenant;
use App\Mapping\MapperInterface;
use function Functional\map;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;

class TenantController
{
    protected $connProvider;
    protected $mapper;

    public function __construct(ConnectionProviderInterface $connProvider, MapperInterface $mapper)
    {
        $this->connProvider = $connProvider;
        $this->mapper = $mapper;
    }

    /**
     * @Route("/Tenant", methods={"GET"})
     * @OA\Get(
     *     path="/Tenant",
     *     description="Fetch all created tenants in JTL-Wawi installation.",
     *     @OA\Response(
     *          response="200",
     *          description="Successfull operation",
     *          @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Tenant"))
     *     )
     * )
     */
    public function getAll()
    {
        return new JsonResponse(map($this->connProvider->getAllTenants(), function($tenant) {
            $dto = new Tenant();
            $dto->id = $tenant[tMandant::kMandant];
            $dto->name = $tenant[tMandant::cName];
            $dto->dbName = $tenant[tMandant::cDB];
            return $dto;
        }));
    }
}