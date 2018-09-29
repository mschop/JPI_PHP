<?php

namespace App\Db\Schema;

class ebay_delete_co_pos
{
	const TABLE_NAME = 'ebay_delete_co_pos';
	const TransactionID = 'TransactionID';
	const ItemID = 'ItemID';
	const COLUMN_NAMES = ['TransactionID', 'ItemID'];
	const COLUMN_DEFINITIONS = [
		'TransactionID' => [
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
	];

	/** @var string TransactionID */
	public $TransactionID;

	/** @var string ItemID */
	public $ItemID;
}
