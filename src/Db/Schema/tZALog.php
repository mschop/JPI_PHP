<?php

namespace App\Db\Schema;

class tZALog
{
	const TABLE_NAME = 'tZALog';
	const dDate = 'dDate';
	const cDatum = 'cDatum';
	const cString = 'cString';
	const COLUMN_NAMES = ['dDate', 'cDatum', 'cString'];
	const COLUMN_DEFINITIONS = [
		'dDate' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 12,
			'characterSetName' => 'iso_1',
		],
		'cDatum' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 12,
			'characterSetName' => 'iso_1',
		],
		'cString' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string dDate */
	public $dDate;

	/** @var string cDatum */
	public $cDatum;

	/** @var string cString */
	public $cString;
}
