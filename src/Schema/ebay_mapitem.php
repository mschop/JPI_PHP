<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kEbayuser' => 'int',
		'Title' => 'varchar',
		'ItemID' => 'varchar',
		'SKU' => 'varchar',
		'Quantity' => 'int',
		'CurrentPrice' => 'decimal',
		'Currency' => 'varchar',
		'EndTime' => 'datetime',
		'ListingType' => 'varchar',
		'cJSONData' => 'varchar',
		'binJSONData' => 'varbinary',
		'kEbay_mapitemSuchString' => 'int',
		'SiteID' => 'int',
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
