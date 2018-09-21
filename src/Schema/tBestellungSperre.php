<?php

namespace App\Schema;

class tBestellungSperre
{
	const TABLE_NAME = 'tBestellungSperre';
	const kBestellung = 'kBestellung';
	const cName = 'cName';
	const COLUMN_NAMES = ['kBestellung', 'cName'];
	const COLUMN_TYPES = ['kBestellung' => 'int', 'cName' => 'varchar'];

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string cName */
	public $cName;
}
