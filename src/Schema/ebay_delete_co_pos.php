<?php

namespace App\Schema;

class ebay_delete_co_pos
{
	const TABLE_NAME = 'ebay_delete_co_pos';
	const TransactionID = 'TransactionID';
	const ItemID = 'ItemID';
	const COLUMN_NAMES = ['TransactionID', 'ItemID'];
	const COLUMN_TYPES = ['TransactionID' => 'varchar', 'ItemID' => 'varchar'];

	/** @var string TransactionID */
	public $TransactionID;

	/** @var string ItemID */
	public $ItemID;
}
