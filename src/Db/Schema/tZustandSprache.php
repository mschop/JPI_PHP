<?php

namespace App\Db\Schema;

class tZustandSprache
{
	const TABLE_NAME = 'tZustandSprache';
	const kZustand = 'kZustand';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kZustand', 'kSprache', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kZustand' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kZustand */
	public $kZustand;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
