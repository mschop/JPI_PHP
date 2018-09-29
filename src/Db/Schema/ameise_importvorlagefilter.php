<?php

namespace App\Db\Schema;

class ameise_importvorlagefilter
{
	const TABLE_NAME = 'ameise_importvorlagefilter';
	const kImportVorlageFilter = 'kImportVorlageFilter';
	const kImportVorlage = 'kImportVorlage';
	const cName = 'cName';
	const cTable = 'cTable';
	const cDBName = 'cDBName';
	const cWert = 'cWert';
	const nOperator = 'nOperator';
	const cDBTyp = 'cDBTyp';
	const nLaenge = 'nLaenge';
	const cValidation = 'cValidation';
	const nSpalte = 'nSpalte';
	const COLUMN_NAMES = [
		'kImportVorlageFilter',
		'kImportVorlage',
		'cName',
		'cTable',
		'cDBName',
		'cWert',
		'nOperator',
		'cDBTyp',
		'nLaenge',
		'cValidation',
		'nSpalte',
	];
	const COLUMN_DEFINITIONS = [
		'kImportVorlageFilter' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kImportVorlage' => [
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
		'cWert' => [
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
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
		'cValidation' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSpalte' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kImportVorlageFilter */
	public $kImportVorlageFilter;

	/** @var int kImportVorlage */
	public $kImportVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cTable */
	public $cTable;

	/** @var string cDBName */
	public $cDBName;

	/** @var string cWert */
	public $cWert;

	/** @var int nOperator */
	public $nOperator;

	/** @var string cDBTyp */
	public $cDBTyp;

	/** @var int nLaenge */
	public $nLaenge;

	/** @var string cValidation */
	public $cValidation;

	/** @var int nSpalte */
	public $nSpalte;
}
