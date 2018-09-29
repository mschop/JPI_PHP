<?php

namespace App\Db\Schema;

class tintervallauftrag
{
	const TABLE_NAME = 'tintervallauftrag';
	const kIntervall = 'kIntervall';
	const dStart = 'dStart';
	const COLUMN_NAMES = ['kIntervall', 'dStart'];
	const COLUMN_DEFINITIONS = [
		'kIntervall' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dStart' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kIntervall */
	public $kIntervall;

	/** @var string dStart */
	public $dStart;
}
