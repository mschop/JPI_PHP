<?php

namespace App\Schema;

class ebay_InternationalShippingServiceOption
{
	const TABLE_NAME = 'ebay_InternationalShippingServiceOption';
	const kInternationalShippingServiceOption = 'kInternationalShippingServiceOption';
	const kItem = 'kItem';
	const ShippingServiceID = 'ShippingServiceID';
	const ShippingServiceAdditionalCost = 'ShippingServiceAdditionalCost';
	const ShippingServiceCost = 'ShippingServiceCost';
	const ShippingServicePriority = 'ShippingServicePriority';
	const ShipToLocation = 'ShipToLocation';
	const ShippingService = 'ShippingService';
	const COLUMN_NAMES = [
		'kInternationalShippingServiceOption',
		'kItem',
		'ShippingServiceID',
		'ShippingServiceAdditionalCost',
		'ShippingServiceCost',
		'ShippingServicePriority',
		'ShipToLocation',
		'ShippingService',
	];
	const COLUMN_TYPES = [
		'kInternationalShippingServiceOption' => 'int',
		'kItem' => 'int',
		'ShippingServiceID' => 'int',
		'ShippingServiceAdditionalCost' => 'decimal',
		'ShippingServiceCost' => 'decimal',
		'ShippingServicePriority' => 'tinyint',
		'ShipToLocation' => 'varchar',
		'ShippingService' => 'varchar',
	];

	/** @var int kInternationalShippingServiceOption */
	public $kInternationalShippingServiceOption;

	/** @var int kItem */
	public $kItem;

	/** @var int ShippingServiceID */
	public $ShippingServiceID;

	/** @var string ShippingServiceAdditionalCost */
	public $ShippingServiceAdditionalCost;

	/** @var string ShippingServiceCost */
	public $ShippingServiceCost;

	/** @var int ShippingServicePriority */
	public $ShippingServicePriority;

	/** @var string ShipToLocation */
	public $ShipToLocation;

	/** @var string ShippingService */
	public $ShippingService;
}
