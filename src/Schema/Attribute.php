<?php

namespace App\Schema;

use OpenApi\Annotations\Items as OAItems;
use OpenApi\Annotations\Property as OAProperty;
use OpenApi\Annotations\Schema as OASchema;

/**
 * @OASchema()
 */
class Attribute
{
	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $id;

	/**
	 * @var bool
	 * @OAProperty(type="boolean")
	 */
	public $isMultilingual;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $sort;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $description;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $outputType;

	/**
	 * @var bool
	 * @OAProperty(type="boolean")
	 */
	public $isDefault;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $fieldTypeId;

	/**
	 * @var resource
	 * @OAProperty(type="string")
	 */
	public $regex;

	/**
	 * @var resource
	 * @OAProperty(type="string")
	 */
	public $groupName;

	/**
	 * @var bool
	 * @OAProperty(type="boolean")
	 */
	public $isReadOnly;

	/**
	 * @var array|null
	 * @OAProperty(type="array", @OAItems(ref="#/components/schemas/AttributeTranslation"))
	 */
	public $translations;

	/**
	 * @var array|null
	 * @OAProperty(type="array", @OAItems(ref="#/components/schemas/AttributeShop"))
	 */
	public $shops;
}
