<?php

namespace App\Db\Schema;

class ebay_mapitem
{
	const TABLE_NAME = 'ebay_mapitem';
	const kEbayuser = 'kEbayuser';
	const Title = 'Title';
	const ItemID = 'ItemID';
	const SKU = 'SKU';
	const Quantity = 'Quantity';
	const CurrentPrice = 'CurrentPrice';
	const Currency = 'Currency';
	const EndTime = 'EndTime';
	const ListingType = 'ListingType';
	const cJSONData = 'cJSONData';
	const binJSONData = 'binJSONData';
	const kEbay_mapitemSuchString = 'kEbay_mapitemSuchString';
	const SiteID = 'SiteID';
	const COLUMN_NAMES = [
		'kEbayuser',
		'Title',
		'ItemID',
		'SKU',
		'Quantity',
		'CurrentPrice',
		'Currency',
		'EndTime',
		'ListingType',
		'cJSONData',
		'binJSONData',
		'kEbay_mapitemSuchString',
		'SiteID',
	];
	const COLUMN_DEFINITIONS = [
		'kEbayuser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Title' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'ItemID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'Quantity' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CurrentPrice' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Currency' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'EndTime' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ListingType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cJSONData' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'binJSONData' => [
			'type' => 'varbinary',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => null,
		],
		'kEbay_mapitemSuchString' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SiteID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var string Title */
	public $Title;

	/** @var string ItemID */
	public $ItemID;

	/** @var string SKU */
	public $SKU;

	/** @var int Quantity */
	public $Quantity;

	/** @var string CurrentPrice */
	public $CurrentPrice;

	/** @var string Currency */
	public $Currency;

	/** @var string EndTime */
	public $EndTime;

	/** @var string ListingType */
	public $ListingType;

	/** @var string cJSONData */
	public $cJSONData;

	/** @var resource binJSONData */
	public $binJSONData;

	/** @var int kEbay_mapitemSuchString */
	public $kEbay_mapitemSuchString;

	/** @var int SiteID */
	public $SiteID;
}
