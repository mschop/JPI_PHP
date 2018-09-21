<?php

namespace App\Schema;

class tTextFiltersSplitStreetExceptions
{
	const TABLE_NAME = 'tTextFiltersSplitStreetExceptions';
	const cIso = 'cIso';
	const cException = 'cException';
	const COLUMN_NAMES = ['cIso', 'cException'];
	const COLUMN_TYPES = ['cIso' => 'varchar', 'cException' => 'varchar'];

	/** @var string cIso */
	public $cIso;

	/** @var string cException */
	public $cException;
}
