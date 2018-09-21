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
	const COLUMN_NAMES = ['kPreis', 'kArtikel', 'kKundenGruppe', 'kShop', 'kKunde'];
	const COLUMN_TYPES = [
		'kPreis' => 'int',
		'kArtikel' => 'int',
		'kKundenGruppe' => 'int',
		'kShop' => 'int',
		'kKunde' => 'int',
	];

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
