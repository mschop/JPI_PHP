<?php

namespace App\Db\Schema;

class tUmsatzzuordnungLog
{
	const TABLE_NAME = 'tUmsatzzuordnungLog';
	const kUmsatzzuordnungLog = 'kUmsatzzuordnungLog';
	const dDatum = 'dDatum';
	const cDaten = 'cDaten';
	const COLUMN_NAMES = ['kUmsatzzuordnungLog', 'dDatum', 'cDaten'];
	const COLUMN_DEFINITIONS = [
		'kUmsatzzuordnungLog' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDaten' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kUmsatzzuordnungLog */
	public $kUmsatzzuordnungLog;

	/** @var string dDatum */
	public $dDatum;

	/** @var string cDaten */
	public $cDaten;
}
