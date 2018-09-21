<?php

namespace App\Schema;

class tLHMTyp
{
	const TABLE_NAME = 'tLHMTyp';
	const kLHMTyp = 'kLHMTyp';
	const cName = 'cName';
	const COLUMN_NAMES = ['kLHMTyp', 'cName'];
	const COLUMN_TYPES = ['kLHMTyp' => 'int', 'cName' => 'varchar'];

	/** @var int kLHMTyp */
	public $kLHMTyp;

	/** @var string cName */
	public $cName;
}
