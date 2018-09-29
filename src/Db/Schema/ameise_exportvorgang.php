<?php

namespace App\Db\Schema;

class ameise_exportvorgang
{
	const TABLE_NAME = 'ameise_exportvorgang';
	const kExportVorgang = 'kExportVorgang';
	const kExportVorlage = 'kExportVorlage';
	const kExportTyp = 'kExportTyp';
	const nAnzahlExportiert = 'nAnzahlExportiert';
	const nAnzahlExportiertVon = 'nAnzahlExportiertVon';
	const nDauer = 'nDauer';
	const nStatus = 'nStatus';
	const cDatei = 'cDatei';
	const dErstellt = 'dErstellt';
	const cMandant = 'cMandant';
	const COLUMN_NAMES = [
		'kExportVorgang',
		'kExportVorlage',
		'kExportTyp',
		'nAnzahlExportiert',
		'nAnzahlExportiertVon',
		'nDauer',
		'nStatus',
		'cDatei',
		'dErstellt',
		'cMandant',
	];
	const COLUMN_DEFINITIONS = [
		'kExportVorgang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kExportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kExportTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlExportiert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlExportiertVon' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDauer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDatei' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMandant' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kExportVorgang */
	public $kExportVorgang;

	/** @var int kExportVorlage */
	public $kExportVorlage;

	/** @var int kExportTyp */
	public $kExportTyp;

	/** @var int nAnzahlExportiert */
	public $nAnzahlExportiert;

	/** @var int nAnzahlExportiertVon */
	public $nAnzahlExportiertVon;

	/** @var int nDauer */
	public $nDauer;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cDatei */
	public $cDatei;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cMandant */
	public $cMandant;
}
