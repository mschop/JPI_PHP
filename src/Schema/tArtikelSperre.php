<?php

namespace App\Schema;

class tArtikelSperre
{
	const TABLE_NAME = 'tArtikelSperre';
	const kArtikel = 'kArtikel';
	const cName = 'cName';
	const COLUMN_NAMES = ['kArtikel', 'cName'];
	const COLUMN_TYPES = ['kArtikel' => 'int', 'cName' => 'varchar'];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cName */
	public $cName;
}
