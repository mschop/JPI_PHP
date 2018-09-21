<?php

namespace App\Schema;

class tArtikelZustand
{
	const TABLE_NAME = 'tArtikelZustand';
	const kArtikelZustand = 'kArtikelZustand';
	const kHauptartikel = 'kHauptartikel';
	const kZustandArtikel = 'kZustandArtikel';
	const COLUMN_NAMES = ['kArtikelZustand', 'kHauptartikel', 'kZustandArtikel'];
	const COLUMN_TYPES = ['kArtikelZustand' => 'int', 'kHauptartikel' => 'int', 'kZustandArtikel' => 'int'];

	/** @var int kArtikelZustand */
	public $kArtikelZustand;

	/** @var int kHauptartikel */
	public $kHauptartikel;

	/** @var int kZustandArtikel */
	public $kZustandArtikel;
}
