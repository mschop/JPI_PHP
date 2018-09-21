<?php

namespace App\Schema;

class tArtikelSichtbarkeit
{
	const TABLE_NAME = 'tArtikelSichtbarkeit';
	const kArtikel = 'kArtikel';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';
	const COLUMN_NAMES = ['kArtikel', 'kKundenGruppe', 'kShop'];
	const COLUMN_TYPES = ['kArtikel' => 'int', 'kKundenGruppe' => 'int', 'kShop' => 'int'];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;
}
