<?php

namespace App\Mapping;


use AutoMapperPlus\Configuration\MappingInterface;

class SimpleMappingGenerator
{
    public function generate(MappingInterface $c, array $mapping)
    {
        foreach($mapping as $targetField => $field) {
            $c->forMember($targetField, function($obj) use ($field) {
                return $obj->$field;
            });
        }
    }
}