<?php

namespace App\Mapping;


use AutoMapperPlus\Configuration\AutoMapperConfigInterface;

interface MapperConfiguratorInterface
{
    public function configure(AutoMapperConfigInterface $config);
}