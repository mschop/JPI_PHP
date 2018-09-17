<?php

namespace App\Schema;

class tXSellGruppeArtikel
{
	const TABLE_NAME = 'tXSellGruppeArtikel';
	const kXSellGruppeArtikel = 'kXSellGruppeArtikel';
	const tXSellGruppe = 'tXSellGruppe';
	const kArtikel = 'kArtikel';

	/** @var int kXSellGruppeArtikel */
	public $kXSellGruppeArtikel;

	/** @var int tXSellGruppe */
	public $tXSellGruppe;

	/** @var int kArtikel */
	public $kArtikel;
}
