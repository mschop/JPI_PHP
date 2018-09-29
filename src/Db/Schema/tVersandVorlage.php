<?php

namespace App\Db\Schema;

class tVersandVorlage
{
	const TABLE_NAME = 'tVersandVorlage';
	const kVersandVorlage = 'kVersandVorlage';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const nStandard = 'nStandard';
	const dErstellt = 'dErstellt';
	const cTrennzeichen = 'cTrennzeichen';
	const nAbZeile = 'nAbZeile';
	const nIntKey = 'nIntKey';
	const nLieferscheinNr = 'nLieferscheinNr';
	const nVersandt = 'nVersandt';
	const nIdentcode = 'nIdentcode';
	const nVersandInfo = 'nVersandInfo';
	const nReserved = 'nReserved';
	const cDateFormat = 'cDateFormat';
	const kLogistik = 'kLogistik';
	const COLUMN_NAMES = [
		'kVersandVorlage',
		'cName',
		'cBeschreibung',
		'nStandard',
		'dErstellt',
		'cTrennzeichen',
		'nAbZeile',
		'nIntKey',
		'nLieferscheinNr',
		'nVersandt',
		'nIdentcode',
		'nVersandInfo',
		'nReserved',
		'cDateFormat',
		'kLogistik',
	];
	const COLUMN_DEFINITIONS = [
		'kVersandVorlage' => [
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
		'nAbZeile' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIntKey' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLieferscheinNr' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVersandt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIdentcode' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVersandInfo' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nReserved' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDateFormat' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kLogistik' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kVersandVorlage */
	public $kVersandVorlage;

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

	/** @var int nAbZeile */
	public $nAbZeile;

	/** @var int nIntKey */
	public $nIntKey;

	/** @var int nLieferscheinNr */
	public $nLieferscheinNr;

	/** @var int nVersandt */
	public $nVersandt;

	/** @var int nIdentcode */
	public $nIdentcode;

	/** @var int nVersandInfo */
	public $nVersandInfo;

	/** @var int nReserved */
	public $nReserved;

	/** @var string cDateFormat */
	public $cDateFormat;

	/** @var int kLogistik */
	public $kLogistik;
}
