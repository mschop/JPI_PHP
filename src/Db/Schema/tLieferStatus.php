<?php

namespace App\Db\Schema;

class tLieferStatus
{
	const TABLE_NAME = 'tLieferStatus';
	const kLieferStatus = 'kLieferStatus';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kLieferStatus', 'kSprache', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kLieferStatus' => [
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

	/** @var int kLieferStatus */
	public $kLieferStatus;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
