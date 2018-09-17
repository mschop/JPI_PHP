<?php

namespace App\Schema;

class ebay_de_versions
{
	const TABLE_NAME = 'ebay_de_versions';
	const getCategories = 'getCategories';
	const getCategory2CS = 'getCategory2CS';
	const getAttributeCS = 'getAttributeCS';

	/** @var int getCategories */
	public $getCategories;

	/** @var int getCategory2CS */
	public $getCategory2CS;

	/** @var int getAttributeCS */
	public $getAttributeCS;
}
