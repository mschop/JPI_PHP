<?php

namespace App\Db\Schema;

class tOptions
{
	const TABLE_NAME = 'tOptions';
	const cKey = 'cKey';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['cKey', 'cValue'];
	const COLUMN_DEFINITIONS = [
		'cKey' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 256,
			'characterSetName' => 'iso_1',
		],
		'cValue' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 500,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cKey */
	public $cKey;

	/** @var string cValue */
	public $cValue;
}
