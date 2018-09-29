<?php

namespace App\Db\Schema;

class ebay_de_isglobalvalue
{
	const TABLE_NAME = 'ebay_de_isglobalvalue';
	const kValue = 'kValue';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kValue', 'cValue'];
	const COLUMN_DEFINITIONS = [
		'kValue' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cValue' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kValue */
	public $kValue;

	/** @var string cValue */
	public $cValue;
}
