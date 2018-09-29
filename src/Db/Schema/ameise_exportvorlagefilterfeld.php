<?php

namespace App\Db\Schema;

class ameise_exportvorlagefilterfeld
{
	const TABLE_NAME = 'ameise_exportvorlagefilterfeld';
	const kExportVorlageFilterFeld = 'kExportVorlageFilterFeld';
	const kExportVorlageFilter = 'kExportVorlageFilter';
	const cDBName = 'cDBName';
	const nOperator = 'nOperator';
	const cWert = 'cWert';
	const cTable = 'cTable';
	const COLUMN_NAMES = ['kExportVorlageFilterFeld', 'kExportVorlageFilter', 'cDBName', 'nOperator', 'cWert', 'cTable'];
	const COLUMN_DEFINITIONS = [
		'kExportVorlageFilterFeld' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kExportVorlageFilter' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDBName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nOperator' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWert' => [
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
	];

	/** @var int kExportVorlageFilterFeld */
	public $kExportVorlageFilterFeld;

	/** @var int kExportVorlageFilter */
	public $kExportVorlageFilter;

	/** @var string cDBName */
	public $cDBName;

	/** @var int nOperator */
	public $nOperator;

	/** @var string cWert */
	public $cWert;

	/** @var string cTable */
	public $cTable;
}
