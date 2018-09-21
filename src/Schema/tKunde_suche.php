<?php

namespace App\Schema;

class tKunde_suche
{
	const TABLE_NAME = 'tKunde_suche';
	const kKunde = 'kKunde';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kKunde', 'cValue'];
	const COLUMN_TYPES = ['kKunde' => 'int', 'cValue' => 'varchar'];

	/** @var int kKunde */
	public $kKunde;

	/** @var string cValue */
	public $cValue;
}
