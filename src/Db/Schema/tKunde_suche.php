<?php

namespace App\Db\Schema;

class tKunde_suche
{
	const TABLE_NAME = 'tKunde_suche';
	const kKunde = 'kKunde';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kKunde', 'cValue'];
	const COLUMN_DEFINITIONS = [
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cValue' => [
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

	/** @var string cValue */
	public $cValue;
}
