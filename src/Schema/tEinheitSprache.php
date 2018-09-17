<?php

namespace App\Schema;

class tEinheitSprache
{
	const TABLE_NAME = 'tEinheitSprache';
	const kEinheit = 'kEinheit';
	const kSprache = 'kSprache';
	const cName = 'cName';

	/** @var int kEinheit */
	public $kEinheit;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
