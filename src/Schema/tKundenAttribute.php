<?php

namespace App\Schema;

class tKundenAttribute
{
	const TABLE_NAME = 'tKundenAttribute';
	const kKundenAttribute = 'kKundenAttribute';
	const kKunde = 'kKunde';
	const cName = 'cName';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kKundenAttribute', 'kKunde', 'cName', 'cValue'];
	const COLUMN_TYPES = ['kKundenAttribute' => 'int', 'kKunde' => 'int', 'cName' => 'varchar', 'cValue' => 'varchar'];

	/** @var int kKundenAttribute */
	public $kKundenAttribute;

	/** @var int kKunde */
	public $kKunde;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
