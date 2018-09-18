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
        $dbal = $this->connProvider->getDbal('eazybusiness');
        $qb = $dbal->createQueryBuilder();

        $qb
            ->from(tMandant::TABLE_NAME)
            ->select([
                tMandant::kMandant,
                tMandant::cName,
                tMandant::cDB,
            ]);

        $allTenants = $qb->execute()->fetchAll(\PDO::FETCH_CLASS, tMandant::class);
        $allTenants = $this->mapper->mapMultiple($allTenants, TenantDto::class);
        return new JsonResponse($allTenants);
    }
}