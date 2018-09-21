<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'SiteID' => 'int',
		'cDescription' => 'varchar',
		'ExpeditedService' => 'tinyint',
		'InternationalService' => 'tinyint',
		'ShippingService' => 'varchar',
		'ShippingServiceID' => 'int',
		'ShippingTimeMin' => 'tinyint',
		'ShippingTimeMax' => 'tinyint',
		'MappedToShippingServiceID' => 'int',
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
