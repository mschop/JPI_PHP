<?php

namespace App\Schema;

class tFormular
{
	const TABLE_NAME = 'tFormular';
	const kFormular = 'kFormular';
	const nTyp = 'nTyp';
	const cName = 'cName';
	const nStandard = 'nStandard';

	/** @var int kFormular */
	public $kFormular;

	/** @var int nTyp */
	public $nTyp;

	/** @var string cName */
	public $cName;

	/** @var int nStandard */
	public $nStandard;
}
