<?php

namespace App\Schema;

class tWarengruppe
{
	const TABLE_NAME = 'tWarengruppe';
	const kWarengruppe = 'kWarengruppe';
	const cName = 'cName';
	const COLUMN_NAMES = ['kWarengruppe', 'cName'];
	const COLUMN_TYPES = ['kWarengruppe' => 'int', 'cName' => 'varchar'];

	/** @var int kWarengruppe */
	public $kWarengruppe;

	/** @var string cName */
	public $cName;
}
