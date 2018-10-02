<?php

namespace App\Schema;

use OpenApi\Annotations\Items as OAItems;
use OpenApi\Annotations\Property as OAProperty;
use OpenApi\Annotations\Schema as OASchema;

/**
 * @OASchema()
 */
class AttributeShop
{
	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $shopId;
}
