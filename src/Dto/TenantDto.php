<?php

namespace App\Dto;

use OpenApi\Annotations as OA;

/**
 * Class TenantDto
 * @package App\Dto
 * @OA\Schema()
 */
class TenantDto
{
    /**
     * @OA\Property(
     *     type="integer"
     * )
     */
    public $id;

    /**
     * @OA\Property(
     *     type="string"
     * )
     */
    public $name;

    /**
     * @OA\Property(
     *     type="string"
     * )
     */
    public $dbName;
}