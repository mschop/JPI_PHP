<?php

namespace App\Schema;

class tKategorieRabatt
{
	const TABLE_NAME = 'tKategorieRabatt';
	const kKategorie = 'kKategorie';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';
	const fRabatt = 'fRabatt';

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;

	/** @var string fRabatt */
	public $fRabatt;
}
