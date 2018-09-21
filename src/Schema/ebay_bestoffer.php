<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'BestOfferID' => 'varchar',
		'ItemID' => 'varchar',
		'Price' => 'decimal',
		'Currency' => 'varchar',
		'Quantity' => 'int',
		'UserID' => 'varchar',
		'Email' => 'varchar',
		'FeedbackScore' => 'int',
		'Message' => 'varchar',
		'Status' => 'tinyint',
		'CounterPrice' => 'decimal',
		'CounterQuantity' => 'int',
		'CounterMessage' => 'varchar',
		'ExpirationTime' => 'datetime',
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
