<?php

namespace App\Schema;

class tKategorieRabatt
{
	const TABLE_NAME = 'tKategorieRabatt';
	const kKategorie = 'kKategorie';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';
	const fRabatt = 'fRabatt';
	const COLUMN_NAMES = ['kKategorie', 'kKundenGruppe', 'kShop', 'fRabatt'];
	const COLUMN_TYPES = ['kKategorie' => 'int', 'kKundenGruppe' => 'int', 'kShop' => 'int', 'fRabatt' => 'decimal'];

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;

	/** @var string fRabatt */
	public $fRabatt;
}
