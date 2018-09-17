<?php

namespace App\Schema;

class ebay_synchartikel
{
	const TABLE_NAME = 'ebay_synchartikel';
	const kArtikel = 'kArtikel';
	const nDay = 'nDay';
	const dSent = 'dSent';

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int nDay */
	public $nDay;

	/** @var string dSent */
	public $dSent;
}
