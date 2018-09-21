<?php

namespace App\Schema;

class tWarenLagerPlatzTyp
{
	const TABLE_NAME = 'tWarenLagerPlatzTyp';
	const kWarenLagerPlatzTyp = 'kWarenLagerPlatzTyp';
	const cName = 'cName';
	const COLUMN_NAMES = ['kWarenLagerPlatzTyp', 'cName'];
	const COLUMN_TYPES = ['kWarenLagerPlatzTyp' => 'int', 'cName' => 'varchar'];

	/** @var int kWarenLagerPlatzTyp */
	public $kWarenLagerPlatzTyp;

	/** @var string cName */
	public $cName;
}
