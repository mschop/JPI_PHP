<?php

namespace App\Db\Schema;

class tKundenDrucktextSprache
{
	const TABLE_NAME = 'tKundenDrucktextSprache';
	const kKundenDrucktext = 'kKundenDrucktext';
	const kSprache = 'kSprache';
	const cRechnungstext = 'cRechnungstext';
	const cAuftragstext = 'cAuftragstext';
	const cAngebotstext = 'cAngebotstext';
	const cGutschrifttext = 'cGutschrifttext';
	const cLieferscheintext = 'cLieferscheintext';
	const COLUMN_NAMES = [
		'kKundenDrucktext',
		'kSprache',
		'cRechnungstext',
		'cAuftragstext',
		'cAngebotstext',
		'cGutschrifttext',
		'cLieferscheintext',
	];
	const COLUMN_DEFINITIONS = [
		'kKundenDrucktext' => [
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
		'cRechnungstext' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cAuftragstext' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cAngebotstext' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cGutschrifttext' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cLieferscheintext' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kKundenDrucktext */
	public $kKundenDrucktext;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cRechnungstext */
	public $cRechnungstext;

	/** @var string cAuftragstext */
	public $cAuftragstext;

	/** @var string cAngebotstext */
	public $cAngebotstext;

	/** @var string cGutschrifttext */
	public $cGutschrifttext;

	/** @var string cLieferscheintext */
	public $cLieferscheintext;
}
