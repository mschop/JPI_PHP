<?php

namespace App\Db\Schema;

class tRMStatusSprache
{
	const TABLE_NAME = 'tRMStatusSprache';
	const kRMStatus = 'kRMStatus';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kRMStatus', 'kSprache', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kRMStatus' => [
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
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kRMStatus */
	public $kRMStatus;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
