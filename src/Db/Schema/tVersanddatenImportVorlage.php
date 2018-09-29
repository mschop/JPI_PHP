<?php

namespace App\Db\Schema;

class tVersanddatenImportVorlage
{
	const TABLE_NAME = 'tVersanddatenImportVorlage';
	const kVersanddatenImportVorlage = 'kVersanddatenImportVorlage';
	const cName = 'cName';
	const cTrennzeichen = 'cTrennzeichen';
	const nKopfzeilen = 'nKopfzeilen';
	const cDatumsFormat = 'cDatumsFormat';
	const nSpalteId = 'nSpalteId';
	const nSpalteVersandDatum = 'nSpalteVersandDatum';
	const nSpalteTrackingNummer = 'nSpalteTrackingNummer';
	const nSpalteVersandInfo = 'nSpalteVersandInfo';
	const COLUMN_NAMES = [
		'kVersanddatenImportVorlage',
		'cName',
		'cTrennzeichen',
		'nKopfzeilen',
		'cDatumsFormat',
		'nSpalteId',
		'nSpalteVersandDatum',
		'nSpalteTrackingNummer',
		'nSpalteVersandInfo',
	];
	const COLUMN_DEFINITIONS = [
		'kVersanddatenImportVorlage' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cTrennzeichen' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'nKopfzeilen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDatumsFormat' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSpalteId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSpalteVersandDatum' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSpalteTrackingNummer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSpalteVersandInfo' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kVersanddatenImportVorlage */
	public $kVersanddatenImportVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cTrennzeichen */
	public $cTrennzeichen;

	/** @var int nKopfzeilen */
	public $nKopfzeilen;

	/** @var string cDatumsFormat */
	public $cDatumsFormat;

	/** @var int nSpalteId */
	public $nSpalteId;

	/** @var int nSpalteVersandDatum */
	public $nSpalteVersandDatum;

	/** @var int nSpalteTrackingNummer */
	public $nSpalteTrackingNummer;

	/** @var int nSpalteVersandInfo */
	public $nSpalteVersandInfo;
}
