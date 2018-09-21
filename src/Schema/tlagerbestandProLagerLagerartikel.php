<?php

namespace App\Schema;

class tlagerbestandProLagerLagerartikel
{
	const TABLE_NAME = 'tlagerbestandProLagerLagerartikel';
	const kArtikel = 'kArtikel';
	const kWarenlager = 'kWarenlager';
	const fBestand = 'fBestand';
	const COLUMN_NAMES = ['kArtikel', 'kWarenlager', 'fBestand'];
	const COLUMN_TYPES = ['kArtikel' => 'int', 'kWarenlager' => 'int', 'fBestand' => 'decimal'];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var string fBestand */
	public $fBestand;
}
