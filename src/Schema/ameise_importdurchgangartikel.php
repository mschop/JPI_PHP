<?php

namespace App\Schema;

class ameise_importdurchgangartikel
{
	const TABLE_NAME = 'ameise_importdurchgangartikel';
	const kImportDurchgang = 'kImportDurchgang';
	const kArtikel = 'kArtikel';
	const COLUMN_NAMES = ['kImportDurchgang', 'kArtikel'];
	const COLUMN_TYPES = ['kImportDurchgang' => 'int', 'kArtikel' => 'int'];

	/** @var int kImportDurchgang */
	public $kImportDurchgang;

	/** @var int kArtikel */
	public $kArtikel;
}
