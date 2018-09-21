<?php

namespace App\Schema;

class tVersandlager
{
	const TABLE_NAME = 'tVersandlager';
	const kWarenlager = 'kWarenlager';
	const nTyp = 'nTyp';
	const COLUMN_NAMES = ['kWarenlager', 'nTyp'];
	const COLUMN_TYPES = ['kWarenlager' => 'int', 'nTyp' => 'tinyint'];

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int nTyp */
	public $nTyp;
}
