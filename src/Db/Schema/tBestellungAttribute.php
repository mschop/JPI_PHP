<?php

namespace App\Db\Schema;

class tBestellungAttribute
{
	const TABLE_NAME = 'tBestellungAttribute';
	const kBestellungAttribute = 'kBestellungAttribute';
	const kBestellung = 'kBestellung';
	const cName = 'cName';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kBestellungAttribute', 'kBestellung', 'cName', 'cValue'];
	const COLUMN_DEFINITIONS = [
		'kBestellungAttribute' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellung' => [
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
			'characterMaximumLength' => 4000,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kBestellungAttribute */
	public $kBestellungAttribute;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
