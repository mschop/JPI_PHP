<?php

namespace App\Db\Schema;

class tLHMTyp
{
	const TABLE_NAME = 'tLHMTyp';
	const kLHMTyp = 'kLHMTyp';
	const cName = 'cName';
	const COLUMN_NAMES = ['kLHMTyp', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kLHMTyp' => [
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

	/** @var int kLHMTyp */
	public $kLHMTyp;

	/** @var string cName */
	public $cName;
}
