<?php

namespace App\Db\Schema;

class ebay_specific
{
	const TABLE_NAME = 'ebay_specific';
	const kItem = 'kItem';
	const cName = 'cName';
	const cValue = 'cValue';
	const nCustom = 'nCustom';
	const COLUMN_NAMES = ['kItem', 'cName', 'cValue', 'nCustom'];
	const COLUMN_DEFINITIONS = [
		'kItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cValue' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4000,
			'characterSetName' => 'iso_1',
		],
		'nCustom' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kItem */
	public $kItem;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;

	/** @var int nCustom */
	public $nCustom;
}
