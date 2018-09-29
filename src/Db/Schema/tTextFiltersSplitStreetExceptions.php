<?php

namespace App\Db\Schema;

class tTextFiltersSplitStreetExceptions
{
	const TABLE_NAME = 'tTextFiltersSplitStreetExceptions';
	const cIso = 'cIso';
	const cException = 'cException';
	const COLUMN_NAMES = ['cIso', 'cException'];
	const COLUMN_DEFINITIONS = [
		'cIso' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 2,
			'characterSetName' => 'iso_1',
		],
		'cException' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 800,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cIso */
	public $cIso;

	/** @var string cException */
	public $cException;
}
