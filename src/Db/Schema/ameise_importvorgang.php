<?php

namespace App\Db\Schema;

class ameise_importvorgang
{
	const TABLE_NAME = 'ameise_importvorgang';
	const kImportVorgang = 'kImportVorgang';
	const kImportVorlage = 'kImportVorlage';
	const kImportTyp = 'kImportTyp';
	const nAbZeile = 'nAbZeile';
	const nAnzahlImportiert = 'nAnzahlImportiert';
	const nAnzahlAktualisiert = 'nAnzahlAktualisiert';
	const nAnzahlWarnungen = 'nAnzahlWarnungen';
	const nAnzahlFehler = 'nAnzahlFehler';
	const nDauer = 'nDauer';
	const nStatus = 'nStatus';
	const cImportdatei = 'cImportdatei';
	const dErstellt = 'dErstellt';
	const cMandant = 'cMandant';
	const COLUMN_NAMES = [
		'kImportVorgang',
		'kImportVorlage',
		'kImportTyp',
		'nAbZeile',
		'nAnzahlImportiert',
		'nAnzahlAktualisiert',
		'nAnzahlWarnungen',
		'nAnzahlFehler',
		'nDauer',
		'nStatus',
		'cImportdatei',
		'dErstellt',
		'cMandant',
	];
	const COLUMN_DEFINITIONS = [
		'kImportVorgang' => [
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
		'kImportTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAbZeile' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlImportiert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlAktualisiert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlWarnungen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlFehler' => [
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
		'cImportdatei' => [
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

	/** @var int kImportVorgang */
	public $kImportVorgang;

	/** @var int kImportVorlage */
	public $kImportVorlage;

	/** @var int kImportTyp */
	public $kImportTyp;

	/** @var int nAbZeile */
	public $nAbZeile;

	/** @var int nAnzahlImportiert */
	public $nAnzahlImportiert;

	/** @var int nAnzahlAktualisiert */
	public $nAnzahlAktualisiert;

	/** @var int nAnzahlWarnungen */
	public $nAnzahlWarnungen;

	/** @var int nAnzahlFehler */
	public $nAnzahlFehler;

	/** @var int nDauer */
	public $nDauer;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cImportdatei */
	public $cImportdatei;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cMandant */
	public $cMandant;
}
