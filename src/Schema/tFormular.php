<?php

namespace App\Schema;

class tFormular
{
	const TABLE_NAME = 'tFormular';
	const kFormular = 'kFormular';
	const nTyp = 'nTyp';
	const cName = 'cName';
	const nStandard = 'nStandard';
	const COLUMN_NAMES = ['kFormular', 'nTyp', 'cName', 'nStandard'];
	const COLUMN_TYPES = ['kFormular' => 'int', 'nTyp' => 'int', 'cName' => 'varchar', 'nStandard' => 'tinyint'];

	/** @var int kFormular */
	public $kFormular;

	/** @var int nTyp */
	public $nTyp;

	/** @var string cName */
	public $cName;

	/** @var int nStandard */
	public $nStandard;
}
