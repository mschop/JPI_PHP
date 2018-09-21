<?php

namespace App\Schema;

class tkategorieartikel
{
	const TABLE_NAME = 'tkategorieartikel';
	const kKategorieArtikel = 'kKategorieArtikel';
	const kArtikel = 'kArtikel';
	const kKategorie = 'kKategorie';
	const COLUMN_NAMES = ['kKategorieArtikel', 'kArtikel', 'kKategorie'];
	const COLUMN_TYPES = ['kKategorieArtikel' => 'int', 'kArtikel' => 'int', 'kKategorie' => 'int'];

	/** @var int kKategorieArtikel */
	public $kKategorieArtikel;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kKategorie */
	public $kKategorie;
}
