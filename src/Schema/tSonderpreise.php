<?php

namespace App\Schema;

class tSonderpreise
{
	const TABLE_NAME = 'tSonderpreise';
	const kArtikelSonderpreis = 'kArtikelSonderpreis';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';
	const fNettoPreis = 'fNettoPreis';
	const COLUMN_NAMES = ['kArtikelSonderpreis', 'kKundenGruppe', 'kShop', 'fNettoPreis'];
	const COLUMN_TYPES = [
		'kArtikelSonderpreis' => 'int',
		'kKundenGruppe' => 'int',
		'kShop' => 'int',
		'fNettoPreis' => 'decimal',
	];

	/** @var int kArtikelSonderpreis */
	public $kArtikelSonderpreis;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;

	/** @var string fNettoPreis */
	public $fNettoPreis;
}
