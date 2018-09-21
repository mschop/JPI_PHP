<?php

namespace App\Schema;

class tTextFiltersSplitStreetExpressions
{
	const TABLE_NAME = 'tTextFiltersSplitStreetExpressions';
	const cIso = 'cIso';
	const cRegEx = 'cRegEx';
	const COLUMN_NAMES = ['cIso', 'cRegEx'];
	const COLUMN_TYPES = ['cIso' => 'varchar', 'cRegEx' => 'varchar'];

	/** @var string cIso */
	public $cIso;

	/** @var string cRegEx */
	public $cRegEx;
}
