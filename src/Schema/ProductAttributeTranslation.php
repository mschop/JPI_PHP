<?php

namespace App\Schema;

use OpenApi\Annotations\Items as OAItems;
use OpenApi\Annotations\Property as OAProperty;
use OpenApi\Annotations\Schema as OASchema;

/**
 * @OASchema()
 */
class ProductAttributeTranslation
{
	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $productAttributeId;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $languageId;

	/**
	 * @var resource
	 * @OAProperty(type="string")
	 */
	public $stringValue;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $dateValue;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $decimalValue;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $intValue;
}
