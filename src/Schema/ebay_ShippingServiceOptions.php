<?php

namespace App\Schema;

class ebay_ShippingServiceOptions
{
	const TABLE_NAME = 'ebay_ShippingServiceOptions';
	const kShippingServiceOptions = 'kShippingServiceOptions';
	const kItem = 'kItem';
	const ShippingServiceID = 'ShippingServiceID';
	const ShippingServiceAdditionalCost = 'ShippingServiceAdditionalCost';
	const ShippingServiceCost = 'ShippingServiceCost';
	const ShippingServicePriority = 'ShippingServicePriority';
	const ShippingService = 'ShippingService';
	const COLUMN_NAMES = [
		'kShippingServiceOptions',
		'kItem',
		'ShippingServiceID',
		'ShippingServiceAdditionalCost',
		'ShippingServiceCost',
		'ShippingServicePriority',
		'ShippingService',
	];
	const COLUMN_TYPES = [
		'kShippingServiceOptions' => 'int',
		'kItem' => 'int',
		'ShippingServiceID' => 'int',
		'ShippingServiceAdditionalCost' => 'decimal',
		'ShippingServiceCost' => 'decimal',
		'ShippingServicePriority' => 'tinyint',
		'ShippingService' => 'varchar',
	];

	/** @var int kShippingServiceOptions */
	public $kShippingServiceOptions;

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

	/** @var string ShippingService */
	public $ShippingService;
}
