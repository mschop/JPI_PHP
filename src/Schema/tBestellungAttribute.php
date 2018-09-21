<?php

namespace App\Schema;

class tBestellungAttribute
{
	const TABLE_NAME = 'tBestellungAttribute';
	const kBestellungAttribute = 'kBestellungAttribute';
	const kBestellung = 'kBestellung';
	const cName = 'cName';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kBestellungAttribute', 'kBestellung', 'cName', 'cValue'];
	const COLUMN_TYPES = ['kBestellungAttribute' => 'int', 'kBestellung' => 'int', 'cName' => 'varchar', 'cValue' => 'varchar'];

	/** @var int kBestellungAttribute */
	public $kBestellungAttribute;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
