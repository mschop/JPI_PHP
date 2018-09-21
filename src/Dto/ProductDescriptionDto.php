<?php

namespace App\Dto;

use OpenApi\Annotations as OA;

/**
 * Class ProductDescriptionDto
 * @package App\Dto
 *
 * @OA\Schema()
 */
class ProductDescriptionDto
{
    /**
     * @var integer
     * @OA\Property(
     *     type="integer"
     * )
     */
    public $languageId;

    /**
     * @var integer
     * @OA\Property(
     *     type="integer"
     * )
     */
    public $platformId;

    /**
     * @var integer
     * @OA\Property(
     *     type="integer"
     * )
     */
    public $shopId;

    /**
     * @var string
     * @OA\Property(
     *     type="string"
     * )
     */
    public $name;

    /**
     * @var string
     * @OA\Property(
     *     type="string"
     * )
     */
    public $description;

    /**
     * @var string
     * @OA\Property(
     *     type="string"
     * )
     */
    public $shortDescription;

    /**
     * @var string
     * @OA\Property(
     *     type="string"
     * )
     */
    public $urlPath;

    /**
     * @var string
     * @OA\Property(
     *     type="string"
     * )
     */
    public $metaDescription;

    /**
     * @var string
     * @OA\Property(
     *     type="string"
     * )
     */
    public $metaTitle;

    /**
     * @var string
     * @OA\Property(
     *     type="string"
     * )
     */
    public $metaKeywords;
}