<?php

namespace App\Db\Schema;

class ebay_shippingprofiles
{
	const TABLE_NAME = 'ebay_shippingprofiles';
	const kEbayBenutzer = 'kEbayBenutzer';
	const cProfilType = 'cProfilType';
	const DiscountProfileID = 'DiscountProfileID';
	const DiscountProfileName = 'DiscountProfileName';
	const SiteID = 'SiteID';
	const COLUMN_NAMES = ['kEbayBenutzer', 'cProfilType', 'DiscountProfileID', 'DiscountProfileName', 'SiteID'];
	const COLUMN_DEFINITIONS = [
		'kEbayBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cProfilType' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'DiscountProfileID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'DiscountProfileName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SiteID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEbayBenutzer */
	public $kEbayBenutzer;

	/** @var string cProfilType */
	public $cProfilType;

	/** @var string DiscountProfileID */
	public $DiscountProfileID;

	/** @var string DiscountProfileName */
	public $DiscountProfileName;

	/** @var int SiteID */
	public $SiteID;
}
