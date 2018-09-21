<?php

namespace App\Schema;

class ebay_de_versandarten
{
	const TABLE_NAME = 'ebay_de_versandarten';
	const kEbay_DE_Versandarten = 'kEbay_DE_Versandarten';
	const Description = 'Description';
	const ExpeditedService = 'ExpeditedService';
	const InternationalService = 'InternationalService';
	const ShippingService = 'ShippingService';
	const ShippingServiceID = 'ShippingServiceID';
	const ShippingTimeMin = 'ShippingTimeMin';
	const ShippingTimeMax = 'ShippingTimeMax';
	const COLUMN_NAMES = [
		'kEbay_DE_Versandarten',
		'Description',
		'ExpeditedService',
		'InternationalService',
		'ShippingService',
		'ShippingServiceID',
		'ShippingTimeMin',
		'ShippingTimeMax',
	];
	const COLUMN_TYPES = [
		'kEbay_DE_Versandarten' => 'int',
		'Description' => 'varchar',
		'ExpeditedService' => 'tinyint',
		'InternationalService' => 'tinyint',
		'ShippingService' => 'varchar',
		'ShippingServiceID' => 'int',
		'ShippingTimeMin' => 'tinyint',
		'ShippingTimeMax' => 'tinyint',
	];

	/** @var int kEbay_DE_Versandarten */
	public $kEbay_DE_Versandarten;

	/** @var string Description */
	public $Description;

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
}
