<?php

namespace App\Controller;


use App\DbConnectionProviderInterface;
use function Functional\map;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TenantController
{
    protected $connProvider;

    public function __construct(DbConnectionProviderInterface $connProvider)
    {
        $this->connProvider = $connProvider;
    }


    /**
     * @Route("/tenant")
     */
    public function getAll()
    {
        $dbal = $this->connProvider->getDbal('eazybusiness');
        $allTenants = $dbal->query('SELECT kMandant, cName, cDB FROM tMandant')->fetchAll(\PDO::FETCH_ASSOC);
        return new JsonResponse(
            map($allTenants, function($tenant) {
                return [
                    'id' => $tenant['kMandant'],
                    'name' => $tenant['cName'],
                    'db' => $tenant['cDB'],
                ];
            })
        );
    }
}