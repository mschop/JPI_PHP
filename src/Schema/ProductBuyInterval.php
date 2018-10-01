<?php

namespace App\Schema;

use OpenApi\Annotations\Items as OAItems;
use OpenApi\Annotations\Property as OAProperty;
use OpenApi\Annotations\Schema as OASchema;

/**
 * @OASchema()
 */
class ProductBuyInterval
{
	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $customerGroupId;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $interval;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $minBuyAmount;
}
