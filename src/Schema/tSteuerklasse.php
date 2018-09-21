<?php

namespace App\Schema;

class tSteuerklasse
{
	const TABLE_NAME = 'tSteuerklasse';
	const kSteuerklasse = 'kSteuerklasse';
	const cName = 'cName';
	const nStandard = 'nStandard';
	const nTyp = 'nTyp';
	const COLUMN_NAMES = ['kSteuerklasse', 'cName', 'nStandard', 'nTyp'];
	const COLUMN_TYPES = ['kSteuerklasse' => 'int', 'cName' => 'varchar', 'nStandard' => 'tinyint', 'nTyp' => 'int'];

	/** @var int kSteuerklasse */
	public $kSteuerklasse;

	/** @var string cName */
	public $cName;

	/** @var int nStandard */
	public $nStandard;

	/** @var int nTyp */
	public $nTyp;
}
