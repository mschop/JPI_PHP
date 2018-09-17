<?php

namespace App\Schema;

class tLieferantRabattStaffel
{
	const TABLE_NAME = 'tLieferantRabattStaffel';
	const kLieferantStaffelPreis = 'kLieferantStaffelPreis';
	const kLieferant = 'kLieferant';
	const fAb = 'fAb';
	const fRabatt = 'fRabatt';

	/** @var int kLieferantStaffelPreis */
	public $kLieferantStaffelPreis;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string fAb */
	public $fAb;

	/** @var string fRabatt */
	public $fRabatt;
}
