<?php

namespace App\Db\Schema;

class tMerkmalSprache
{
	const TABLE_NAME = 'tMerkmalSprache';
	const kMerkmal = 'kMerkmal';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kMerkmal', 'kSprache', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kMerkmal' => [
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

	/** @var int kMerkmal */
	public $kMerkmal;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
