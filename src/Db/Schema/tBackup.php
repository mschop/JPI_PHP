<?php

namespace App\Db\Schema;

class tBackup
{
	const TABLE_NAME = 'tBackup';
	const kBackup = 'kBackup';
	const dDatum = 'dDatum';
	const COLUMN_NAMES = ['kBackup', 'dDatum'];
	const COLUMN_DEFINITIONS = [
		'kBackup' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dDatum' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kBackup */
	public $kBackup;

	/** @var string dDatum */
	public $dDatum;
}
