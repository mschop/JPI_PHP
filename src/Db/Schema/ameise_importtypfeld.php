<?php

namespace App\Db\Schema;

class ameise_importtypfeld
{
	const TABLE_NAME = 'ameise_importtypfeld';
	const kImportTypFeld = 'kImportTypFeld';
	const kImportTyp = 'kImportTyp';
	const cName = 'cName';
	const cTable = 'cTable';
	const cDBName = 'cDBName';
	const cDBTyp = 'cDBTyp';
	const nLaenge = 'nLaenge';
	const nStandard = 'nStandard';
	const cStandardWert = 'cStandardWert';
	const cValidation = 'cValidation';
	const nSort = 'nSort';
	const COLUMN_NAMES = [
		'kImportTypFeld',
		'kImportTyp',
		'cName',
		'cTable',
		'cDBName',
		'cDBTyp',
		'nLaenge',
		'nStandard',
		'cStandardWert',
		'cValidation',
		'nSort',
	];
	const COLUMN_DEFINITIONS = [
		'kImportTypFeld' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kImportTyp' => [
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
		'cTable' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cDBName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cDBTyp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'nLaenge' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStandard' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cStandardWert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cValidation' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kImportTypFeld */
	public $kImportTypFeld;

	/** @var int kImportTyp */
	public $kImportTyp;

	/** @var string cName */
	public $cName;

	/** @var string cTable */
	public $cTable;

	/** @var string cDBName */
	public $cDBName;

	/** @var string cDBTyp */
	public $cDBTyp;

	/** @var int nLaenge */
	public $nLaenge;

	/** @var int nStandard */
	public $nStandard;

	/** @var string cStandardWert */
	public $cStandardWert;

	/** @var string cValidation */
	public $cValidation;

	/** @var int nSort */
	public $nSort;
}
