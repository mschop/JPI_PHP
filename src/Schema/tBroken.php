<?php

namespace App\Schema;

class tBroken
{
	const TABLE_NAME = 'tBroken';
	const cBroken = 'cBroken';
	const dDatum = 'dDatum';
	const cKey = 'cKey';
	const COLUMN_NAMES = ['cBroken', 'dDatum', 'cKey'];
	const COLUMN_TYPES = ['cBroken' => 'varchar', 'dDatum' => 'datetime', 'cKey' => 'varchar'];

	/** @var string cBroken */
	public $cBroken;

	/** @var string dDatum */
	public $dDatum;

	/** @var string cKey */
	public $cKey;
}
