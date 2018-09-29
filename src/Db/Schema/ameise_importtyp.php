<?php

namespace App\Db\Schema;

class ameise_importtyp
{
	const TABLE_NAME = 'ameise_importtyp';
	const kImportTyp = 'kImportTyp';
	const kImportTypParent = 'kImportTypParent';
	const cName = 'cName';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kImportTyp', 'kImportTypParent', 'cName', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kImportTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kImportTypParent' => [
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

	/** @var int kImportTyp */
	public $kImportTyp;

	/** @var int kImportTypParent */
	public $kImportTypParent;

	/** @var string cName */
	public $cName;

	/** @var int nSort */
	public $nSort;
}
