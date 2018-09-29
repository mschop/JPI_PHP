<?php

namespace App\Db\Schema;

class tMassEinheitSprache
{
	const TABLE_NAME = 'tMassEinheitSprache';
	const kMassEinheit = 'kMassEinheit';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kMassEinheit', 'kSprache', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kMassEinheit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kMassEinheit */
	public $kMassEinheit;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
