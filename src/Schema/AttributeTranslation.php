<?php

namespace App\Schema;

use OpenApi\Annotations\Items as OAItems;
use OpenApi\Annotations\Property as OAProperty;
use OpenApi\Annotations\Schema as OASchema;

/**
 * @OASchema()
 */
class AttributeTranslation
{
	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $languageId;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $name;

	/**
	 * @var array
	 * @OAProperty(type="array", @OAItems(type="string"))
	 */
	public $valueList;
}
