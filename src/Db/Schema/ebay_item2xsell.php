<?php

namespace App\Db\Schema;

class ebay_item2xsell
{
	const TABLE_NAME = 'ebay_item2xsell';
	const kEbayItem = 'kEbayItem';
	const kXSell = 'kXSell';
	const COLUMN_NAMES = ['kEbayItem', 'kXSell'];
	const COLUMN_DEFINITIONS = [
		'kEbayItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kXSell' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEbayItem */
	public $kEbayItem;

	/** @var int kXSell */
	public $kXSell;
}
