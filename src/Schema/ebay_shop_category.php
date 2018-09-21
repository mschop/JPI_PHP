<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kStoreCategory' => 'int',
		'kStore' => 'int',
		'kEbayUser' => 'int',
		'CategoryID' => 'bigint',
		'ParentCategory' => 'bigint',
		'Name' => 'varchar',
		'nOrder' => 'int',
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
