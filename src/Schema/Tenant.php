<?php

namespace App\Schema;

use OpenApi\Annotations\Items as OAItems;
use OpenApi\Annotations\Property as OAProperty;
use OpenApi\Annotations\Schema as OASchema;

/**
 * @OASchema()
 */
class Tenant
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
	public $name;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $dbName;
}
