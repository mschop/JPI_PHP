<?php

namespace App\Schema;

use OpenApi\Annotations\Items as OAItems;
use OpenApi\Annotations\Property as OAProperty;
use OpenApi\Annotations\Schema as OASchema;

/**
 * @OASchema()
 */
class DeliveryAddress
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
	public $customerId;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $company;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $salutation;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $title;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $firstName;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $name;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $street;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $postcode;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $city;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $country;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $phone;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $addition;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $addressAddition;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $postId;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $mobile;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $mail;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $fax;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $state;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $countryIsoCode;
}
