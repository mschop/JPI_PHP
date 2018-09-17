<?php

namespace App\Schema;

class tMassEinheitSprache
{
	const TABLE_NAME = 'tMassEinheitSprache';
	const kMassEinheit = 'kMassEinheit';
	const kSprache = 'kSprache';
	const cName = 'cName';

	/** @var int kMassEinheit */
	public $kMassEinheit;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
