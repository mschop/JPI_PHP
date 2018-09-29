<?php

namespace App\Db\Schema;

class tInetBestellungAttribute
{
	const TABLE_NAME = 'tInetBestellungAttribute';
	const kInetBestellungAttribute = 'kInetBestellungAttribute';
	const kInetBestellung = 'kInetBestellung';
	const kShop = 'kShop';
	const cName = 'cName';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kInetBestellungAttribute', 'kInetBestellung', 'kShop', 'cName', 'cValue'];
	const COLUMN_DEFINITIONS = [
		'kInetBestellungAttribute' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kInetBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
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
	];

	/** @var int kInetBestellungAttribute */
	public $kInetBestellungAttribute;

	/** @var int kInetBestellung */
	public $kInetBestellung;

	/** @var int kShop */
	public $kShop;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
