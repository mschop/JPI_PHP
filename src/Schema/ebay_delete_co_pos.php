<?php

namespace App\Schema;

class ebay_delete_co_pos
{
	const TABLE_NAME = 'ebay_delete_co_pos';
	const TransactionID = 'TransactionID';
	const ItemID = 'ItemID';

	/** @var string TransactionID */
	public $TransactionID;

	/** @var string ItemID */
	public $ItemID;
}
