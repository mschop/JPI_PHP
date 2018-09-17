<?php

namespace App\Schema;

class tXSell
{
	const TABLE_NAME = 'tXSell';
	const kXSell = 'kXSell';
	const kArtikel = 'kArtikel';
	const kXSellArtikel = 'kXSellArtikel';
	const kXSellGruppe = 'kXSellGruppe';
	const nEigenesFeld = 'nEigenesFeld';

	/** @var int kXSell */
	public $kXSell;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kXSellArtikel */
	public $kXSellArtikel;

	/** @var int kXSellGruppe */
	public $kXSellGruppe;

	/** @var int nEigenesFeld */
	public $nEigenesFeld;
}
