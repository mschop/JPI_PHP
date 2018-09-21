<?php

namespace App\Schema;

class tPLZ
{
	const TABLE_NAME = 'tPLZ';
	const cPLZ = 'cPLZ';
	const cOrt = 'cOrt';
	const cLand = 'cLand';
	const COLUMN_NAMES = ['cPLZ', 'cOrt', 'cLand'];
	const COLUMN_TYPES = ['cPLZ' => 'varchar', 'cOrt' => 'varchar', 'cLand' => 'varchar'];

	/** @var string cPLZ */
	public $cPLZ;

	/** @var string cOrt */
	public $cOrt;

	/** @var string cLand */
	public $cLand;
}
