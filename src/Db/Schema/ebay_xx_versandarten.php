<?php

namespace App\Db\Schema;

class ebay_xx_versandarten
{
	const TABLE_NAME = 'ebay_xx_versandarten';
	const SiteID = 'SiteID';
	const cDescription = 'cDescription';
	const ExpeditedService = 'ExpeditedService';
	const InternationalService = 'InternationalService';
	const ShippingService = 'ShippingService';
	const ShippingServiceID = 'ShippingServiceID';
	const ShippingTimeMin = 'ShippingTimeMin';
	const ShippingTimeMax = 'ShippingTimeMax';
	const MappedToShippingServiceID = 'MappedToShippingServiceID';
	const COLUMN_NAMES = [
		'SiteID',
		'cDescription',
		'ExpeditedService',
		'InternationalService',
		'ShippingService',
		'ShippingServiceID',
		'ShippingTimeMin',
		'ShippingTimeMax',
		'MappedToShippingServiceID',
	];
	const COLUMN_DEFINITIONS = [
		'SiteID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDescription' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'ExpeditedService' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'InternationalService' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'ShippingServiceID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ShippingTimeMin' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ShippingTimeMax' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'MappedToShippingServiceID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int SiteID */
	public $SiteID;

	/** @var string cDescription */
	public $cDescription;

	/** @var int ExpeditedService */
	public $ExpeditedService;

	/** @var int InternationalService */
	public $InternationalService;

	/** @var string ShippingService */
	public $ShippingService;

	/** @var int ShippingServiceID */
	public $ShippingServiceID;

	/** @var int ShippingTimeMin */
	public $ShippingTimeMin;

	/** @var int ShippingTimeMax */
	public $ShippingTimeMax;

	/** @var int MappedToShippingServiceID */
	public $MappedToShippingServiceID;
}
