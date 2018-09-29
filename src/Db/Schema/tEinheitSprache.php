<?php

namespace App\Db\Schema;

class tEinheitSprache
{
	const TABLE_NAME = 'tEinheitSprache';
	const kEinheit = 'kEinheit';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kEinheit', 'kSprache', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kEinheit' => [
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

	/** @var int kEinheit */
	public $kEinheit;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
