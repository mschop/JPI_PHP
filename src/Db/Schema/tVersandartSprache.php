<?php

namespace App\Db\Schema;

class tVersandartSprache
{
	const TABLE_NAME = 'tVersandartSprache';
	const kVersandart = 'kVersandart';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cDruckText = 'cDruckText';
	const cAuftragsText = 'cAuftragsText';
	const COLUMN_NAMES = ['kVersandart', 'kSprache', 'cName', 'cDruckText', 'cAuftragsText'];
	const COLUMN_DEFINITIONS = [
		'kVersandart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cDruckText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAuftragsText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kVersandart */
	public $kVersandart;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cDruckText */
	public $cDruckText;

	/** @var string cAuftragsText */
	public $cAuftragsText;
}
