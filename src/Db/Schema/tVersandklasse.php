<?php

namespace App\Db\Schema;

class tVersandklasse
{
	const TABLE_NAME = 'tVersandklasse';
	const kVersandklasse = 'kVersandklasse';
	const cName = 'cName';
	const COLUMN_NAMES = ['kVersandklasse', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kVersandklasse' => [
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
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kVersandklasse */
	public $kVersandklasse;

	/** @var string cName */
	public $cName;
}
