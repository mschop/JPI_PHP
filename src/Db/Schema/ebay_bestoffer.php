<?php

namespace App\Db\Schema;

class ebay_bestoffer
{
	const TABLE_NAME = 'ebay_bestoffer';
	const BestOfferID = 'BestOfferID';
	const ItemID = 'ItemID';
	const Price = 'Price';
	const Currency = 'Currency';
	const Quantity = 'Quantity';
	const UserID = 'UserID';
	const Email = 'Email';
	const FeedbackScore = 'FeedbackScore';
	const Message = 'Message';
	const Status = 'Status';
	const CounterPrice = 'CounterPrice';
	const CounterQuantity = 'CounterQuantity';
	const CounterMessage = 'CounterMessage';
	const ExpirationTime = 'ExpirationTime';
	const COLUMN_NAMES = [
		'BestOfferID',
		'ItemID',
		'Price',
		'Currency',
		'Quantity',
		'UserID',
		'Email',
		'FeedbackScore',
		'Message',
		'Status',
		'CounterPrice',
		'CounterQuantity',
		'CounterMessage',
		'ExpirationTime',
	];
	const COLUMN_DEFINITIONS = [
		'BestOfferID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 256,
			'characterSetName' => 'iso_1',
		],
		'ItemID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 256,
			'characterSetName' => 'iso_1',
		],
		'Price' => [
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
			'characterMaximumLength' => 256,
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
		'UserID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 256,
			'characterSetName' => 'iso_1',
		],
		'Email' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 256,
			'characterSetName' => 'iso_1',
		],
		'FeedbackScore' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Message' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 501,
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
		'CounterPrice' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CounterQuantity' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CounterMessage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'ExpirationTime' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string BestOfferID */
	public $BestOfferID;

	/** @var string ItemID */
	public $ItemID;

	/** @var string Price */
	public $Price;

	/** @var string Currency */
	public $Currency;

	/** @var int Quantity */
	public $Quantity;

	/** @var string UserID */
	public $UserID;

	/** @var string Email */
	public $Email;

	/** @var int FeedbackScore */
	public $FeedbackScore;

	/** @var string Message */
	public $Message;

	/** @var int Status */
	public $Status;

	/** @var string CounterPrice */
	public $CounterPrice;

	/** @var int CounterQuantity */
	public $CounterQuantity;

	/** @var string CounterMessage */
	public $CounterMessage;

	/** @var string ExpirationTime */
	public $ExpirationTime;
}
