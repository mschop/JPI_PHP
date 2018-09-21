<?php

namespace App\Mapping\Mapper;


use App\Dto\ProductDto;
use App\Mapping\MapperConfiguratorInterface;
use App\Schema\tArtikel;
use AutoMapperPlus\Configuration\AutoMapperConfigInterface;

class ProductMapper implements MapperConfiguratorInterface
{
    public function configure(AutoMapperConfigInterface $config)
    {
        $defaultFields = [
            'id' => tArtikel::kArtikel,
            'sku' => tArtikel::cArtNr,
            'price' => tArtikel::fVKNetto,
        ];

        $mapping = $config->registerMapping(tArtikel::class, ProductDto::class);
        foreach($defaultFields as $targetField => $field) {
            $mapping->forMember($targetField, function($obj) use ($field) {
                return $obj->$field;
            });
        }
        $mapping->reverseMap();
    }
}