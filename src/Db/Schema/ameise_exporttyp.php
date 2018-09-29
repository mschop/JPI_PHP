<?php

namespace App\Db\Schema;

class ameise_exporttyp
{
	const TABLE_NAME = 'ameise_exporttyp';
	const kExportTyp = 'kExportTyp';
	const kExportTypParent = 'kExportTypParent';
	const cName = 'cName';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kExportTyp', 'kExportTypParent', 'cName', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kExportTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kExportTypParent' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
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
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kExportTyp */
	public $kExportTyp;

	/** @var int kExportTypParent */
	public $kExportTypParent;

	/** @var string cName */
	public $cName;

	/** @var int nSort */
	public $nSort;
}
