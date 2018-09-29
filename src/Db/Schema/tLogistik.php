<?php

namespace App\Db\Schema;

class tLogistik
{
	const TABLE_NAME = 'tLogistik';
	const kLogistik = 'kLogistik';
	const cName = 'cName';
	const cURL = 'cURL';
	const nStandard = 'nStandard';
	const cAmazonCC = 'cAmazonCC';
	const cEbayCC = 'cEbayCC';
	const kVersanddatenExportVorlage = 'kVersanddatenExportVorlage';
	const kVersanddatenImportVorlage = 'kVersanddatenImportVorlage';
	const nPaketeAutomatischErzeugen = 'nPaketeAutomatischErzeugen';
	const fMaxGewicht = 'fMaxGewicht';
	const COLUMN_NAMES = [
		'kLogistik',
		'cName',
		'cURL',
		'nStandard',
		'cAmazonCC',
		'cEbayCC',
		'kVersanddatenExportVorlage',
		'kVersanddatenImportVorlage',
		'nPaketeAutomatischErzeugen',
		'fMaxGewicht',
	];
	const COLUMN_DEFINITIONS = [
		'kLogistik' => [
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
		'cURL' => [
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
		'cAmazonCC' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cEbayCC' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kVersanddatenExportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersanddatenImportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPaketeAutomatischErzeugen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMaxGewicht' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLogistik */
	public $kLogistik;

	/** @var string cName */
	public $cName;

	/** @var string cURL */
	public $cURL;

	/** @var int nStandard */
	public $nStandard;

	/** @var string cAmazonCC */
	public $cAmazonCC;

	/** @var string cEbayCC */
	public $cEbayCC;

	/** @var int kVersanddatenExportVorlage */
	public $kVersanddatenExportVorlage;

	/** @var int kVersanddatenImportVorlage */
	public $kVersanddatenImportVorlage;

	/** @var int nPaketeAutomatischErzeugen */
	public $nPaketeAutomatischErzeugen;

	/** @var string fMaxGewicht */
	public $fMaxGewicht;
}
