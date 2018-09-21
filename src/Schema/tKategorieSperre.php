<?php

namespace App\Schema;

class tKategorieSperre
{
	const TABLE_NAME = 'tKategorieSperre';
	const kKategorie = 'kKategorie';
	const cName = 'cName';
	const COLUMN_NAMES = ['kKategorie', 'cName'];
	const COLUMN_TYPES = ['kKategorie' => 'int', 'cName' => 'varchar'];

	/** @var int kKategorie */
	public $kKategorie;

	/** @var string cName */
	public $cName;
}
