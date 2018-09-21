<?php

namespace App\Schema;

class tOptions
{
	const TABLE_NAME = 'tOptions';
	const cKey = 'cKey';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['cKey', 'cValue'];
	const COLUMN_TYPES = ['cKey' => 'varchar', 'cValue' => 'varchar'];

	/** @var string cKey */
	public $cKey;

	/** @var string cValue */
	public $cValue;
}
