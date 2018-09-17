<?php

namespace App\Schema;

class tArtikelSichtbarkeit
{
	const TABLE_NAME = 'tArtikelSichtbarkeit';
	const kArtikel = 'kArtikel';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;
}
