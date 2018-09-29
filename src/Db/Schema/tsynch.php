<?php

namespace App\Db\Schema;

class tsynch
{
	const TABLE_NAME = 'tsynch';
	const cIP = 'cIP';
	const COLUMN_NAMES = ['cIP'];
	const COLUMN_DEFINITIONS = [
		'cIP' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cIP */
	public $cIP;
}
