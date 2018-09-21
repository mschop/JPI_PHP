<?php

namespace App\Schema;

class tZustandSprache
{
	const TABLE_NAME = 'tZustandSprache';
	const kZustand = 'kZustand';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kZustand', 'kSprache', 'cName'];
	const COLUMN_TYPES = ['kZustand' => 'int', 'kSprache' => 'int', 'cName' => 'varchar'];

	/** @var int kZustand */
	public $kZustand;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
