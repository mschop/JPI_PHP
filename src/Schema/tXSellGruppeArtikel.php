<?php

namespace App\Schema;

class tXSellGruppeArtikel
{
	const TABLE_NAME = 'tXSellGruppeArtikel';
	const kXSellGruppeArtikel = 'kXSellGruppeArtikel';
	const tXSellGruppe = 'tXSellGruppe';
	const kArtikel = 'kArtikel';
	const COLUMN_NAMES = ['kXSellGruppeArtikel', 'tXSellGruppe', 'kArtikel'];
	const COLUMN_TYPES = ['kXSellGruppeArtikel' => 'int', 'tXSellGruppe' => 'int', 'kArtikel' => 'int'];

	/** @var int kXSellGruppeArtikel */
	public $kXSellGruppeArtikel;

	/** @var int tXSellGruppe */
	public $tXSellGruppe;

	/** @var int kArtikel */
	public $kArtikel;
}
