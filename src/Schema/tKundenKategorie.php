<?php

namespace App\Schema;

class tKundenKategorie
{
	const TABLE_NAME = 'tKundenKategorie';
	const kKundenKategorie = 'kKundenKategorie';
	const cName = 'cName';
	const COLUMN_NAMES = ['kKundenKategorie', 'cName'];
	const COLUMN_TYPES = ['kKundenKategorie' => 'int', 'cName' => 'varchar'];

	/** @var int kKundenKategorie */
	public $kKundenKategorie;

	/** @var string cName */
	public $cName;
}
