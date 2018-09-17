<?php

namespace App\Mapping;


use AutoMapperPlus\AutoMapper;
use AutoMapperPlus\Configuration\AutoMapperConfig;

class Mapper extends AutoMapper implements MapperInterface
{
    protected $mapperConfigurators;

    /**
     * Mapper constructor.
     * @param $mapperConfigurators
     */
    public function __construct($mapperConfigurators)
    {
        $this->mapperConfigurators = $mapperConfigurators;
        $config = new AutoMapperConfig();
        foreach ($this->mapperConfigurators as $mapperConfigurator) {
            $mapperConfigurator->configure($config);
        }
        parent::__construct($config);
    }
}