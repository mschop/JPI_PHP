<?php

namespace App\Db\Schema;

class tKundenSperre
{
	const TABLE_NAME = 'tKundenSperre';
	const kKunde = 'kKunde';
	const cName = 'cName';
	const COLUMN_NAMES = ['kKunde', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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

	/** @var int kKunde */
	public $kKunde;

	/** @var string cName */
	public $cName;
}
