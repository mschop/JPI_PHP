<?php

namespace App\Schema;

class tArtikelUpload
{
	const TABLE_NAME = 'tArtikelUpload';
	const kArtikelUpload = 'kArtikelUpload';
	const kArtikel = 'kArtikel';
	const cDateiTyp = 'cDateiTyp';
	const nPflicht = 'nPflicht';

	/** @var int kArtikelUpload */
	public $kArtikelUpload;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cDateiTyp */
	public $cDateiTyp;

	/** @var int nPflicht */
	public $nPflicht;
}
