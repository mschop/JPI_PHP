<?php

namespace App\Mapping\Mapper;


use App\Dto\TenantDto;
use App\Mapping\MapperConfiguratorInterface;
use App\Schema\tMandant;
use AutoMapperPlus\Configuration\AutoMapperConfigInterface;

class TenantMapper implements MapperConfiguratorInterface
{
    public function configure(AutoMapperConfigInterface $config)
    {
        $config
            ->registerMapping(tMandant::class, TenantDto::class)
            ->forMember('id', function(tMandant $obj) { return $obj->kMandant; })
            ->forMember('name', function(tMandant $obj) { return $obj->cName; })
            ->forMember('dbName', function(tMandant $obj) { return $obj->cDB; })
            ->reverseMap()
        ;
    }
}