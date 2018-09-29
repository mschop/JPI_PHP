<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kShippingServiceOptions' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ShippingServiceID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ShippingServiceAdditionalCost' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ShippingServiceCost' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ShippingServicePriority' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ShippingService' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
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
