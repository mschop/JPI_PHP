<?php

namespace App\Schema;

class tWaehrungISO
{
	const TABLE_NAME = 'tWaehrungISO';
	const cISO = 'cISO';
	const cName = 'cName';
	const cLand = 'cLand';
	const COLUMN_NAMES = ['cISO', 'cName', 'cLand'];
	const COLUMN_TYPES = ['cISO' => 'varchar', 'cName' => 'varchar', 'cLand' => 'varchar'];

	/** @var string cISO */
	public $cISO;

	/** @var string cName */
	public $cName;

	/** @var string cLand */
	public $cLand;
}
