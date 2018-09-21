<?php

namespace App\Schema;

class tpk
{
	const TABLE_NAME = 'tpk';
	const cName = 'cName';
	const nummer = 'nummer';
	const dChanged = 'dChanged';
	const COLUMN_NAMES = ['cName', 'nummer', 'dChanged'];
	const COLUMN_TYPES = ['cName' => 'varchar', 'nummer' => 'int', 'dChanged' => 'varchar'];

	/** @var string cName */
	public $cName;

	/** @var int nummer */
	public $nummer;

	/** @var string dChanged */
	public $dChanged;
}
