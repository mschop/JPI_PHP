<?php

namespace App\Db\Schema;

class tLHMAttribut
{
	const TABLE_NAME = 'tLHMAttribut';
	const kLHMAttribut = 'kLHMAttribut';
	const kLHM = 'kLHM';
	const cAttribut = 'cAttribut';
	const COLUMN_NAMES = ['kLHMAttribut', 'kLHM', 'cAttribut'];
	const COLUMN_DEFINITIONS = [
		'kLHMAttribut' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLHM' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAttribut' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 200,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kLHMAttribut */
	public $kLHMAttribut;

	/** @var int kLHM */
	public $kLHM;

	/** @var string cAttribut */
	public $cAttribut;
}
