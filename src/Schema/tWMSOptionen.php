<?php

namespace App\Schema;

class tWMSOptionen
{
	const TABLE_NAME = 'tWMSOptionen';
	const cName = 'cName';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['cName', 'cWert'];
	const COLUMN_TYPES = ['cName' => 'varchar', 'cWert' => 'varchar'];

	/** @var string cName */
	public $cName;

	/** @var string cWert */
	public $cWert;
}
