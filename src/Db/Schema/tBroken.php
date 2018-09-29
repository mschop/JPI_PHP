<?php

namespace App\Db\Schema;

class tBroken
{
	const TABLE_NAME = 'tBroken';
	const cBroken = 'cBroken';
	const dDatum = 'dDatum';
	const cKey = 'cKey';
	const COLUMN_NAMES = ['cBroken', 'dDatum', 'cKey'];
	const COLUMN_DEFINITIONS = [
		'cBroken' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1024,
			'characterSetName' => 'iso_1',
		],
		'dDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKey' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cBroken */
	public $cBroken;

	/** @var string dDatum */
	public $dDatum;

	/** @var string cKey */
	public $cKey;
}
