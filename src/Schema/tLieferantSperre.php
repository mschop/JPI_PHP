<?php

namespace App\Schema;

class tLieferantSperre
{
	const TABLE_NAME = 'tLieferantSperre';
	const kLieferant = 'kLieferant';
	const cName = 'cName';
	const COLUMN_NAMES = ['kLieferant', 'cName'];
	const COLUMN_TYPES = ['kLieferant' => 'int', 'cName' => 'varchar'];

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string cName */
	public $cName;
}
