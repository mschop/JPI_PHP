<?php

namespace App\Schema;

class tVersandklasse
{
	const TABLE_NAME = 'tVersandklasse';
	const kVersandklasse = 'kVersandklasse';
	const cName = 'cName';
	const COLUMN_NAMES = ['kVersandklasse', 'cName'];
	const COLUMN_TYPES = ['kVersandklasse' => 'int', 'cName' => 'varchar'];

	/** @var int kVersandklasse */
	public $kVersandklasse;

	/** @var string cName */
	public $cName;
}
