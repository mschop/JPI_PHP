<?php

namespace App\Db\Schema;

class ameise_importtypeinstellungwert
{
	const TABLE_NAME = 'ameise_importtypeinstellungwert';
	const kImportTypEinstellungWert = 'kImportTypEinstellungWert';
	const kImportTypEinstellung = 'kImportTypEinstellung';
	const cName = 'cName';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kImportTypEinstellungWert', 'kImportTypEinstellung', 'cName', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kImportTypEinstellungWert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kImportTypEinstellung' => [
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
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kImportTypEinstellungWert */
	public $kImportTypEinstellungWert;

	/** @var int kImportTypEinstellung */
	public $kImportTypEinstellung;

	/** @var string cName */
	public $cName;

	/** @var int nSort */
	public $nSort;
}
