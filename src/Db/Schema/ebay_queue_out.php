<?php

namespace App\Db\Schema;

class ebay_queue_out
{
	const TABLE_NAME = 'ebay_queue_out';
	const ItemID = 'ItemID';
	const TransactionID = 'TransactionID';
	const kEbayUser = 'kEbayUser';
	const nType = 'nType';
	const cIdentcode = 'cIdentcode';
	const cCarrierCode = 'cCarrierCode';
	const COLUMN_NAMES = ['ItemID', 'TransactionID', 'kEbayUser', 'nType', 'cIdentcode', 'cCarrierCode'];
	const COLUMN_DEFINITIONS = [
		'ItemID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'TransactionID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kEbayUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nType' => [
			'type' => 'smallint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cIdentcode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCarrierCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string ItemID */
	public $ItemID;

	/** @var string TransactionID */
	public $TransactionID;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var int nType */
	public $nType;

	/** @var string cIdentcode */
	public $cIdentcode;

	/** @var string cCarrierCode */
	public $cCarrierCode;
}
