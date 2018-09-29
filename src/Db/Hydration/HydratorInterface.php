<?php

namespace App\Db\Hydration;


interface HydratorInterface
{
    /**
     * @param array $assocArr
     * @param string $targetEntity
     * @return object
     */
    public function toObject(array $assocArr, string $targetEntity, string $alias): object;

    /**
     * @param string $targetEntity
     * @param string $alias
     * @return array
     */
    public function createSelect(string $targetEntity, string $alias): string;
}