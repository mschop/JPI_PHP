<?php

namespace App\Schema;

class tWarenLagerDimensionTyp
{
	const TABLE_NAME = 'tWarenLagerDimensionTyp';
	const kWarenLagerDimensionTyp = 'kWarenLagerDimensionTyp';
	const cName = 'cName';
	const COLUMN_NAMES = ['kWarenLagerDimensionTyp', 'cName'];
	const COLUMN_TYPES = ['kWarenLagerDimensionTyp' => 'int', 'cName' => 'varchar'];

	/** @var int kWarenLagerDimensionTyp */
	public $kWarenLagerDimensionTyp;

	/** @var string cName */
	public $cName;
}
