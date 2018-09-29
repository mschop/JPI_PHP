<?php

namespace App\Db\Schema;

class tKundenAttribute
{
	const TABLE_NAME = 'tKundenAttribute';
	const kKundenAttribute = 'kKundenAttribute';
	const kKunde = 'kKunde';
	const cName = 'cName';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kKundenAttribute', 'kKunde', 'cName', 'cValue'];
	const COLUMN_DEFINITIONS = [
		'kKundenAttribute' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
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

	/** @var int kKundenAttribute */
	public $kKundenAttribute;

	/** @var int kKunde */
	public $kKunde;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
