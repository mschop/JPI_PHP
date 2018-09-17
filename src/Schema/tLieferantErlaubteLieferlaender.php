<?php

namespace App\Schema;

class tLieferantErlaubteLieferlaender
{
	const TABLE_NAME = 'tLieferantErlaubteLieferlaender';
	const kLieferant = 'kLieferant';
	const cIso = 'cIso';

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string cIso */
	public $cIso;
}
