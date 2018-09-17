<?php

namespace App\Schema;

class tGebuehrtyp
{
	const TABLE_NAME = 'tGebuehrtyp';
	const kGebuehrtyp = 'kGebuehrtyp';
	const cName = 'cName';
	const cNameExtern = 'cNameExtern';
	const nTyp = 'nTyp';

	/** @var int kGebuehrtyp */
	public $kGebuehrtyp;

	/** @var string cName */
	public $cName;

	/** @var string cNameExtern */
	public $cNameExtern;

	/** @var int nTyp */
	public $nTyp;
}
