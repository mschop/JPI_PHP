<?php

namespace App\Db\Schema;

class tTextFiltersSplitStreetExpressions
{
	const TABLE_NAME = 'tTextFiltersSplitStreetExpressions';
	const cIso = 'cIso';
	const cRegEx = 'cRegEx';
	const COLUMN_NAMES = ['cIso', 'cRegEx'];
	const COLUMN_DEFINITIONS = [
		'cIso' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 2,
			'characterSetName' => 'iso_1',
		],
		'cRegEx' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cIso */
	public $cIso;

	/** @var string cRegEx */
	public $cRegEx;
}
