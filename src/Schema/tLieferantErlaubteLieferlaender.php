<?php

namespace App\Schema;

class tLieferantErlaubteLieferlaender
{
	const TABLE_NAME = 'tLieferantErlaubteLieferlaender';
	const kLieferant = 'kLieferant';
	const cIso = 'cIso';
	const COLUMN_NAMES = ['kLieferant', 'cIso'];
	const COLUMN_TYPES = ['kLieferant' => 'int', 'cIso' => 'varchar'];

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string cIso */
	public $cIso;
}
