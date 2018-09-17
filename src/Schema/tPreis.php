<?php

namespace App\Schema;

class tPreis
{
	const TABLE_NAME = 'tPreis';
	const kPreis = 'kPreis';
	const kArtikel = 'kArtikel';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';
	const kKunde = 'kKunde';

	/** @var int kPreis */
	public $kPreis;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;

	/** @var int kKunde */
	public $kKunde;
}
