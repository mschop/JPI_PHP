<?php

namespace App\Schema;

class tKundenSperre
{
	const TABLE_NAME = 'tKundenSperre';
	const kKunde = 'kKunde';
	const cName = 'cName';
	const COLUMN_NAMES = ['kKunde', 'cName'];
	const COLUMN_TYPES = ['kKunde' => 'int', 'cName' => 'varchar'];

	/** @var int kKunde */
	public $kKunde;

	/** @var string cName */
	public $cName;
}
