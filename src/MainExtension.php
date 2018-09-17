<?php

namespace App;


use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class MainExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $config = $this->processConfiguration(new MainConfig(), $configs);
        $container->setParameter('mainConfig', $config);
    }

    public function getNamespace()
    {
        return 'main';
    }

    public function getAlias()
    {
        return 'main';
    }
}