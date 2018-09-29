<?php

namespace App\Db\Schema;

class tWarengruppe
{
	const TABLE_NAME = 'tWarengruppe';
	const kWarengruppe = 'kWarengruppe';
	const cName = 'cName';
	const COLUMN_NAMES = ['kWarengruppe', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kWarengruppe' => [
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

	/** @var int kWarengruppe */
	public $kWarengruppe;

	/** @var string cName */
	public $cName;
}
