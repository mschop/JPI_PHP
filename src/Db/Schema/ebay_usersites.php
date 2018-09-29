<?php

namespace App\Db\Schema;

class ebay_usersites
{
	const TABLE_NAME = 'ebay_usersites';
	const kEbayuser = 'kEbayuser';
	const SiteId = 'SiteId';
	const COLUMN_NAMES = ['kEbayuser', 'SiteId'];
	const COLUMN_DEFINITIONS = [
		'kEbayuser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SiteId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var int SiteId */
	public $SiteId;
}
