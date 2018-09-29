<?php

namespace App\Db\Schema;

class tLastModified
{
	const TABLE_NAME = 'tLastModified';
	const kLastModified = 'kLastModified';
	const cTablename = 'cTablename';
	const dLastModified = 'dLastModified';
	const COLUMN_NAMES = ['kLastModified', 'cTablename', 'dLastModified'];
	const COLUMN_DEFINITIONS = [
		'kLastModified' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTablename' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'dLastModified' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLastModified */
	public $kLastModified;

	/** @var string cTablename */
	public $cTablename;

	/** @var string dLastModified */
	public $dLastModified;
}
