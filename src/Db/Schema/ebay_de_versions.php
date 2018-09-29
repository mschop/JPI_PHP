<?php

namespace App\Db\Schema;

class ebay_de_versions
{
	const TABLE_NAME = 'ebay_de_versions';
	const getCategories = 'getCategories';
	const getCategory2CS = 'getCategory2CS';
	const getAttributeCS = 'getAttributeCS';
	const COLUMN_NAMES = ['getCategories', 'getCategory2CS', 'getAttributeCS'];
	const COLUMN_DEFINITIONS = [
		'getCategories' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'getCategory2CS' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'getAttributeCS' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int getCategories */
	public $getCategories;

	/** @var int getCategory2CS */
	public $getCategory2CS;

	/** @var int getAttributeCS */
	public $getAttributeCS;
}
