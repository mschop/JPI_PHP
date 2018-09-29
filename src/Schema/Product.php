<?php

namespace App\Schema;

use OpenApi\Annotations\Items as OAItems;
use OpenApi\Annotations\Property as OAProperty;
use OpenApi\Annotations\Schema as OASchema;

/**
 * @OASchema()
 */
class Product
{
	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $id;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $sku;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $netPrice;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $rrp;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $note;

	/**
	 * @var bool
	 * @OAProperty(type="boolean")
	 */
	public $isPriceList;

	/**
	 * @var bool
	 * @OAProperty(type="boolean")
	 */
	public $isActive;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $stock;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $minOrderAmount;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $gtin;

	/**
	 * @var array|null
	 * @OAProperty(type="array", @OAItems(ref="#/components/schemas/ProductDescription"))
	 */
	public $descriptions;
}
