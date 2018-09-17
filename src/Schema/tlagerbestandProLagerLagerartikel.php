<?php

namespace App\Schema;

class tlagerbestandProLagerLagerartikel
{
	const TABLE_NAME = 'tlagerbestandProLagerLagerartikel';
	const kArtikel = 'kArtikel';
	const kWarenlager = 'kWarenlager';
	const fBestand = 'fBestand';

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var string fBestand */
	public $fBestand;
}
