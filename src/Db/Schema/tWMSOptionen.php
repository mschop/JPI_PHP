<?php

namespace App\Db\Schema;

class tWMSOptionen
{
	const TABLE_NAME = 'tWMSOptionen';
	const cName = 'cName';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['cName', 'cWert'];
	const COLUMN_DEFINITIONS = [
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cWert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cName */
	public $cName;

	/** @var string cWert */
	public $cWert;
}
