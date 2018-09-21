<?php

namespace App\Schema;

class ebay_de_versions
{
	const TABLE_NAME = 'ebay_de_versions';
	const getCategories = 'getCategories';
	const getCategory2CS = 'getCategory2CS';
	const getAttributeCS = 'getAttributeCS';
	const COLUMN_NAMES = ['getCategories', 'getCategory2CS', 'getAttributeCS'];
	const COLUMN_TYPES = ['getCategories' => 'int', 'getCategory2CS' => 'int', 'getAttributeCS' => 'int'];

	/** @var int getCategories */
	public $getCategories;

	/** @var int getCategory2CS */
	public $getCategory2CS;

	/** @var int getAttributeCS */
	public $getAttributeCS;
}
