<?php

namespace App\Db\Schema;

class tAdressExportFelderErweitert
{
	const TABLE_NAME = 'tAdressExportFelderErweitert';
	const kAdressExportVorlage = 'kAdressExportVorlage';
	const nFeldNr = 'nFeldNr';
	const cName = 'cName';
	const cWert = 'cWert';
	const cZone = 'cZone';
	const COLUMN_NAMES = ['kAdressExportVorlage', 'nFeldNr', 'cName', 'cWert', 'cZone'];
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
		'cName' => [
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
		'cZone' => [
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

	/** @var string cName */
	public $cName;

	/** @var string cWert */
	public $cWert;

	/** @var string cZone */
	public $cZone;
}
