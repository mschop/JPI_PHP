<?php

namespace App\Db\Schema;

class ameise_importtypeinstellung
{
	const TABLE_NAME = 'ameise_importtypeinstellung';
	const kImportTypEinstellung = 'kImportTypEinstellung';
	const kImportTyp = 'kImportTyp';
	const cName = 'cName';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kImportTypEinstellung', 'kImportTyp', 'cName', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kImportTypEinstellung' => [
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

	/** @var int kImportTypEinstellung */
	public $kImportTypEinstellung;

	/** @var int kImportTyp */
	public $kImportTyp;

	/** @var string cName */
	public $cName;

	/** @var int nSort */
	public $nSort;
}
