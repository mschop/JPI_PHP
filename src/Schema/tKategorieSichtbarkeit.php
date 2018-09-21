<?php

namespace App\Schema;

class tKategorieSichtbarkeit
{
	const TABLE_NAME = 'tKategorieSichtbarkeit';
	const kKategorie = 'kKategorie';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';
	const COLUMN_NAMES = ['kKategorie', 'kKundenGruppe', 'kShop'];
	const COLUMN_TYPES = ['kKategorie' => 'int', 'kKundenGruppe' => 'int', 'kShop' => 'int'];

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;
}
