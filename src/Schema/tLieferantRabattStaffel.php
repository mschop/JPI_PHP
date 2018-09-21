<?php

namespace App\Schema;

class tLieferantRabattStaffel
{
	const TABLE_NAME = 'tLieferantRabattStaffel';
	const kLieferantStaffelPreis = 'kLieferantStaffelPreis';
	const kLieferant = 'kLieferant';
	const fAb = 'fAb';
	const fRabatt = 'fRabatt';
	const COLUMN_NAMES = ['kLieferantStaffelPreis', 'kLieferant', 'fAb', 'fRabatt'];
	const COLUMN_TYPES = ['kLieferantStaffelPreis' => 'int', 'kLieferant' => 'int', 'fAb' => 'decimal', 'fRabatt' => 'decimal'];

	/** @var int kLieferantStaffelPreis */
	public $kLieferantStaffelPreis;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string fAb */
	public $fAb;

	/** @var string fRabatt */
	public $fRabatt;
}
