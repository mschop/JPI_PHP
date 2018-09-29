<?php

namespace App\Db\Schema;

class tpk
{
	const TABLE_NAME = 'tpk';
	const cName = 'cName';
	const nummer = 'nummer';
	const dChanged = 'dChanged';
	const COLUMN_NAMES = ['cName', 'nummer', 'dChanged'];
	const COLUMN_DEFINITIONS = [
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nummer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dChanged' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cName */
	public $cName;

	/** @var int nummer */
	public $nummer;

	/** @var string dChanged */
	public $dChanged;
}
