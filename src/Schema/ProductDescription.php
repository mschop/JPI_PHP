<?php

namespace App\Schema;

use OpenApi\Annotations\Items as OAItems;
use OpenApi\Annotations\Property as OAProperty;
use OpenApi\Annotations\Schema as OASchema;

/**
 * @OASchema()
 */
class ProductDescription
{
	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $languageId;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $platformId;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $shopId;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $name;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $description;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $shopDescription;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $urlPath;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $metaDescription;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $metaTitle;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $metaKeywords;
}
