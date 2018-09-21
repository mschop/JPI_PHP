<?php

namespace App\Schema;

class tLieferantWarenlager
{
	const TABLE_NAME = 'tLieferantWarenlager';
	const kLieferantWarenlager = 'kLieferantWarenlager';
	const kLieferant = 'kLieferant';
	const kWarenlager = 'kWarenlager';
	const COLUMN_NAMES = ['kLieferantWarenlager', 'kLieferant', 'kWarenlager'];
	const COLUMN_TYPES = ['kLieferantWarenlager' => 'int', 'kLieferant' => 'int', 'kWarenlager' => 'int'];

	/** @var int kLieferantWarenlager */
	public $kLieferantWarenlager;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kWarenlager */
	public $kWarenlager;
}
