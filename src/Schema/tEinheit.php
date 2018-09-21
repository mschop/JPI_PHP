<?php

namespace App\Schema;

class tEinheit
{
	const TABLE_NAME = 'tEinheit';
	const kEinheit = 'kEinheit';
	const nIstUnsichtbar = 'nIstUnsichtbar';
	const COLUMN_NAMES = ['kEinheit', 'nIstUnsichtbar'];
	const COLUMN_TYPES = ['kEinheit' => 'int', 'nIstUnsichtbar' => 'tinyint'];

	/** @var int kEinheit */
	public $kEinheit;

	/** @var int nIstUnsichtbar */
	public $nIstUnsichtbar;
}
