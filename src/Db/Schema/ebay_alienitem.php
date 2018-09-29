<?php

namespace App\Db\Schema;

class ebay_alienitem
{
	const TABLE_NAME = 'ebay_alienitem';
	const kAlienItem = 'kAlienItem';
	const Title = 'Title';
	const ItemID = 'ItemID';
	const StartTime = 'StartTime';
	const EndTime = 'EndTime';
	const ListingType = 'ListingType';
	const Quantity = 'Quantity';
	const QuantityAvailable = 'QuantityAvailable';
	const SS_BidderCount = 'SS_BidderCount';
	const SS_BidCount = 'SS_BidCount';
	const SS_CurrentPrice = 'SS_CurrentPrice';
	const SS_HighBidderUserId = 'SS_HighBidderUserId';
	const StartPrice = 'StartPrice';
	const BuyItNowPrice = 'BuyItNowPrice';
	const CurrencyID = 'CurrencyID';
	const UserID = 'UserID';
	const Status = 'Status';
	const kEbayuser = 'kEbayuser';
	const SKU = 'SKU';
	const VATPercent = 'VATPercent';
	const COLUMN_NAMES = [
		'kAlienItem',
		'Title',
		'ItemID',
		'StartTime',
		'EndTime',
		'ListingType',
		'Quantity',
		'QuantityAvailable',
		'SS_BidderCount',
		'SS_BidCount',
		'SS_CurrentPrice',
		'SS_HighBidderUserId',
		'StartPrice',
		'BuyItNowPrice',
		'CurrencyID',
		'UserID',
		'Status',
		'kEbayuser',
		'SKU',
		'VATPercent',
	];
	const COLUMN_DEFINITIONS = [
		'kAlienItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'StartTime' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
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
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Quantity' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'QuantityAvailable' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SS_BidderCount' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SS_BidCount' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SS_CurrentPrice' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SS_HighBidderUserId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'StartPrice' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'BuyItNowPrice' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CurrencyID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'UserID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Status' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayuser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'VATPercent' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAlienItem */
	public $kAlienItem;

	/** @var string Title */
	public $Title;

	/** @var string ItemID */
	public $ItemID;

	/** @var string StartTime */
	public $StartTime;

	/** @var string EndTime */
	public $EndTime;

	/** @var string ListingType */
	public $ListingType;

	/** @var int Quantity */
	public $Quantity;

	/** @var int QuantityAvailable */
	public $QuantityAvailable;

	/** @var int SS_BidderCount */
	public $SS_BidderCount;

	/** @var int SS_BidCount */
	public $SS_BidCount;

	/** @var string SS_CurrentPrice */
	public $SS_CurrentPrice;

	/** @var string SS_HighBidderUserId */
	public $SS_HighBidderUserId;

	/** @var string StartPrice */
	public $StartPrice;

	/** @var string BuyItNowPrice */
	public $BuyItNowPrice;

	/** @var string CurrencyID */
	public $CurrencyID;

	/** @var string UserID */
	public $UserID;

	/** @var int Status */
	public $Status;

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var string SKU */
	public $SKU;

	/** @var string VATPercent */
	public $VATPercent;
}
