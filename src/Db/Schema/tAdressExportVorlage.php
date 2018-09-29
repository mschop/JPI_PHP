<?php

namespace App\Db\Schema;

class tAdressExportVorlage
{
	const TABLE_NAME = 'tAdressExportVorlage';
	const kAdressExportVorlage = 'kAdressExportVorlage';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const nStandard = 'nStandard';
	const dErstellt = 'dErstellt';
	const cTrennzeichen = 'cTrennzeichen';
	const cKomma = 'cKomma';
	const nKopfzeile = 'nKopfzeile';
	const cPfad = 'cPfad';
	const nZusatzzeile = 'nZusatzzeile';
	const COLUMN_NAMES = [
		'kAdressExportVorlage',
		'cName',
		'cBeschreibung',
		'nStandard',
		'dErstellt',
		'cTrennzeichen',
		'cKomma',
		'nKopfzeile',
		'cPfad',
		'nZusatzzeile',
	];
	const COLUMN_DEFINITIONS = [
		'kAdressExportVorlage' => [
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
		'cBeschreibung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nStandard' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 24,
			'characterSetName' => 'iso_1',
		],
		'cTrennzeichen' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4,
			'characterSetName' => 'iso_1',
		],
		'cKomma' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 2,
			'characterSetName' => 'iso_1',
		],
		'nKopfzeile' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPfad' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 512,
			'characterSetName' => 'iso_1',
		],
		'nZusatzzeile' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAdressExportVorlage */
	public $kAdressExportVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int nStandard */
	public $nStandard;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cTrennzeichen */
	public $cTrennzeichen;

	/** @var string cKomma */
	public $cKomma;

	/** @var int nKopfzeile */
	public $nKopfzeile;

	/** @var string cPfad */
	public $cPfad;

	/** @var int nZusatzzeile */
	public $nZusatzzeile;
}
