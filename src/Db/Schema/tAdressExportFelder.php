<?php

namespace App\Db\Schema;

class tAdressExportFelder
{
	const TABLE_NAME = 'tAdressExportFelder';
	const kAdressExportVorlage = 'kAdressExportVorlage';
	const nFeldNr = 'nFeldNr';
	const cPrefix = 'cPrefix';
	const cWert = 'cWert';
	const cSuffix = 'cSuffix';
	const cStandardWert = 'cStandardWert';
	const cName = 'cName';
	const nMaxlen = 'nMaxlen';
	const cZusatzzeile = 'cZusatzzeile';
	const COLUMN_NAMES = [
		'kAdressExportVorlage',
		'nFeldNr',
		'cPrefix',
		'cWert',
		'cSuffix',
		'cStandardWert',
		'cName',
		'nMaxlen',
		'cZusatzzeile',
	];
	const COLUMN_DEFINITIONS = [
		'kAdressExportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nFeldNr' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPrefix' => [
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
		'cSuffix' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cStandardWert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nMaxlen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cZusatzzeile' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kAdressExportVorlage */
	public $kAdressExportVorlage;

	/** @var int nFeldNr */
	public $nFeldNr;

	/** @var string cPrefix */
	public $cPrefix;

	/** @var string cWert */
	public $cWert;

	/** @var string cSuffix */
	public $cSuffix;

	/** @var string cStandardWert */
	public $cStandardWert;

	/** @var string cName */
	public $cName;

	/** @var int nMaxlen */
	public $nMaxlen;

	/** @var string cZusatzzeile */
	public $cZusatzzeile;
}
