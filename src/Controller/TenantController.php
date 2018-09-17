<?php

namespace App\Controller;


use App\DbConnectionProviderInterface;
use App\Dto\TenantDto;
use App\Mapping\MapperInterface;
use App\Schema\tMandant;
use function Functional\map;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

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
     * @Route("/tenant")
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