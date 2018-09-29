<?php

namespace App\Db\Schema;

class ebay_data_store
{
	const TABLE_NAME = 'ebay_data_store';
	const kStore = 'kStore';
	const kEbayUser = 'kEbayUser';
	const Name = 'Name';
	const SubscriptionLevel = 'SubscriptionLevel';
	const URL = 'URL';
	const COLUMN_NAMES = ['kStore', 'kEbayUser', 'Name', 'SubscriptionLevel', 'URL'];
	const COLUMN_DEFINITIONS = [
		'kStore' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Name' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SubscriptionLevel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'URL' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kStore */
	public $kStore;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var string Name */
	public $Name;

	/** @var string SubscriptionLevel */
	public $SubscriptionLevel;

	/** @var string URL */
	public $URL;
}
