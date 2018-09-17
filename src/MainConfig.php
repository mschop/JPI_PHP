<?php

namespace App;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class MainConfig implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $root = $treeBuilder->root('app_config');

        $root
            ->children()
                ->arrayNode('db')
                    ->children()
                        ->scalarNode('host')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('user')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('port')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('pass')->isRequired()->cannotBeEmpty()->end()
                    ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}