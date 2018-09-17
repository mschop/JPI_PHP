<?php

namespace App\Schema;

class tKategorieSichtbarkeit
{
	const TABLE_NAME = 'tKategorieSichtbarkeit';
	const kKategorie = 'kKategorie';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;
}
