<?php

namespace App\Db\Schema;

class ebay_shop_category
{
	const TABLE_NAME = 'ebay_shop_category';
	const kStoreCategory = 'kStoreCategory';
	const kStore = 'kStore';
	const kEbayUser = 'kEbayUser';
	const CategoryID = 'CategoryID';
	const ParentCategory = 'ParentCategory';
	const Name = 'Name';
	const nOrder = 'nOrder';
	const COLUMN_NAMES = ['kStoreCategory', 'kStore', 'kEbayUser', 'CategoryID', 'ParentCategory', 'Name', 'nOrder'];
	const COLUMN_DEFINITIONS = [
		'kStoreCategory' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kStore' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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
		'CategoryID' => [
			'type' => 'bigint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ParentCategory' => [
			'type' => 'bigint',
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
		'nOrder' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kStoreCategory */
	public $kStoreCategory;

	/** @var int kStore */
	public $kStore;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var int CategoryID */
	public $CategoryID;

	/** @var int ParentCategory */
	public $ParentCategory;

	/** @var string Name */
	public $Name;

	/** @var int nOrder */
	public $nOrder;
}
