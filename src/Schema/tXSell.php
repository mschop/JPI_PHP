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
	const COLUMN_NAMES = ['kXSell', 'kArtikel', 'kXSellArtikel', 'kXSellGruppe', 'nEigenesFeld'];
	const COLUMN_TYPES = [
		'kXSell' => 'int',
		'kArtikel' => 'int',
		'kXSellArtikel' => 'int',
		'kXSellGruppe' => 'int',
		'nEigenesFeld' => 'tinyint',
	];

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
