<?php

namespace App\Db\Schema;

class ebay_de_isrelation
{
	const TABLE_NAME = 'ebay_de_isrelation';
	const CategoryId = 'CategoryId';
	const kName = 'kName';
	const kValue = 'kValue';
	const kNameParent = 'kNameParent';
	const kValueParent = 'kValueParent';
	const COLUMN_NAMES = ['CategoryId', 'kName', 'kValue', 'kNameParent', 'kValueParent'];
	const COLUMN_DEFINITIONS = [
		'CategoryId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kName' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kValue' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kNameParent' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kValueParent' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int kName */
	public $kName;

	/** @var int kValue */
	public $kValue;

	/** @var int kNameParent */
	public $kNameParent;

	/** @var int kValueParent */
	public $kValueParent;
}
