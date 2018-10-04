<?php

namespace App\Schema;

use OpenApi\Annotations\Items as OAItems;
use OpenApi\Annotations\Property as OAProperty;
use OpenApi\Annotations\Schema as OASchema;

/**
 * @OASchema()
 */
class ProductAttribute
{
	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $id;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $attributeId;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $shopId;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $productId;

	/**
	 * @var array|null
	 * @OAProperty(type="array", @OAItems(ref="#/components/schemas/ProductAttributeTranslation"))
	 */
	public $translations;

	/**
	 * @var array|null
	 * @OAProperty(ref="#/components/schemas/Attribute")
	 */
	public $attribute;
}
