<?php

namespace App\Schema;

class tMassEinheitSprache
{
	const TABLE_NAME = 'tMassEinheitSprache';
	const kMassEinheit = 'kMassEinheit';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kMassEinheit', 'kSprache', 'cName'];
	const COLUMN_TYPES = ['kMassEinheit' => 'int', 'kSprache' => 'int', 'cName' => 'varchar'];

	/** @var int kMassEinheit */
	public $kMassEinheit;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
