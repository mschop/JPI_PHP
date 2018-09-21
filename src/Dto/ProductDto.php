<?php

namespace App\Dto;

use OpenApi\Annotations as OA;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ProductDto
 * @package App\Dto
 *
 * @OA\Schema()
 */
class ProductDto
{
    /**
     * @var integer
     * @OA\Property(
     *     type="integer"
     * )
     */
    public $id;

    /**
     * @var string
     * @OA\Property(
     *     type="string"
     * )
     */
    public $sku;

    /**
     * @var string
     * @OA\Property(
     *      type="number"
     * )
     */
    public $price;
}