<?php

namespace App\Db\Schema;

class ameise_UpdateOptimizer
{
	const TABLE_NAME = 'ameise_UpdateOptimizer';
	const kArtikel = 'kArtikel';
	const kImportTyp = 'kImportTyp';
	const cUpdateRawString = 'cUpdateRawString';
	const COLUMN_NAMES = ['kArtikel', 'kImportTyp', 'cUpdateRawString'];
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
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
		'cUpdateRawString' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kImportTyp */
	public $kImportTyp;

	/** @var string cUpdateRawString */
	public $cUpdateRawString;
}
