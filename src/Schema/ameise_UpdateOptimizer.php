<?php

namespace App\Schema;

class ameise_UpdateOptimizer
{
	const TABLE_NAME = 'ameise_UpdateOptimizer';
	const kArtikel = 'kArtikel';
	const kImportTyp = 'kImportTyp';
	const cUpdateRawString = 'cUpdateRawString';
	const COLUMN_NAMES = ['kArtikel', 'kImportTyp', 'cUpdateRawString'];
	const COLUMN_TYPES = ['kArtikel' => 'int', 'kImportTyp' => 'int', 'cUpdateRawString' => 'varchar'];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kImportTyp */
	public $kImportTyp;

	/** @var string cUpdateRawString */
	public $cUpdateRawString;
}
