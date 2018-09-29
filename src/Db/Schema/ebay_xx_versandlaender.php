<?php

namespace App\Db\Schema;

class ebay_xx_versandlaender
{
	const TABLE_NAME = 'ebay_xx_versandlaender';
	const SiteID = 'SiteID';
	const ShippingLocation = 'ShippingLocation';
	const cDescription = 'cDescription';
	const COLUMN_NAMES = ['SiteID', 'ShippingLocation', 'cDescription'];
	const COLUMN_DEFINITIONS = [
		'SiteID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ShippingLocation' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cDescription' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int SiteID */
	public $SiteID;

	/** @var string ShippingLocation */
	public $ShippingLocation;

	/** @var string cDescription */
	public $cDescription;
}
