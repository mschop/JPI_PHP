<?php

namespace App\Schema;

class tArtikelMerkmal
{
	const TABLE_NAME = 'tArtikelMerkmal';
	const kMerkmal = 'kMerkmal';
	const kMerkmalWert = 'kMerkmalWert';
	const kArtikel = 'kArtikel';

	/** @var int kMerkmal */
	public $kMerkmal;

	/** @var int kMerkmalWert */
	public $kMerkmalWert;

	/** @var int kArtikel */
	public $kArtikel;
}
