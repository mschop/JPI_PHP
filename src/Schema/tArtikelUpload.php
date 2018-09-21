<?php

namespace App\Schema;

class tArtikelUpload
{
	const TABLE_NAME = 'tArtikelUpload';
	const kArtikelUpload = 'kArtikelUpload';
	const kArtikel = 'kArtikel';
	const cDateiTyp = 'cDateiTyp';
	const nPflicht = 'nPflicht';
	const COLUMN_NAMES = ['kArtikelUpload', 'kArtikel', 'cDateiTyp', 'nPflicht'];
	const COLUMN_TYPES = ['kArtikelUpload' => 'int', 'kArtikel' => 'int', 'cDateiTyp' => 'varchar', 'nPflicht' => 'int'];

	/** @var int kArtikelUpload */
	public $kArtikelUpload;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cDateiTyp */
	public $cDateiTyp;

	/** @var int nPflicht */
	public $nPflicht;
}
