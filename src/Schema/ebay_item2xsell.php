<?php

namespace App\Schema;

class ebay_item2xsell
{
	const TABLE_NAME = 'ebay_item2xsell';
	const kEbayItem = 'kEbayItem';
	const kXSell = 'kXSell';
	const COLUMN_NAMES = ['kEbayItem', 'kXSell'];
	const COLUMN_TYPES = ['kEbayItem' => 'int', 'kXSell' => 'int'];

	/** @var int kEbayItem */
	public $kEbayItem;

	/** @var int kXSell */
	public $kXSell;
}
