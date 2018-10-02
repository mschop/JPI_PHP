<?php

namespace App\Db\Hydration;


interface HydratorInterface
{
    /**
     * @param array $assocArr
     * @param string $targetEntity
     * @return object
     */
    public function toObject(array $assocArr, string $targetEntity, string $alias = null): object;

    /**
     * @param array $arrOfAssocArr
     * @param string $targetEntity
     * @param string $alias
     * @return object[]
     */
    public function multipleToObject(array $arrOfAssocArr, string $targetEntity, string $alias = null): array;

    /**
     * @param string $targetEntity
     * @param string $alias
     * @return array
     */
    public function createSelect(string $targetEntity, string $alias = null): string;
}