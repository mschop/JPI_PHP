<?php

namespace App\Db\Schema;

class tSteuerklasse
{
	const TABLE_NAME = 'tSteuerklasse';
	const kSteuerklasse = 'kSteuerklasse';
	const cName = 'cName';
	const nStandard = 'nStandard';
	const nTyp = 'nTyp';
	const COLUMN_NAMES = ['kSteuerklasse', 'cName', 'nStandard', 'nTyp'];
	const COLUMN_DEFINITIONS = [
		'kSteuerklasse' => [
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
		'nStandard' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kSteuerklasse */
	public $kSteuerklasse;

	/** @var string cName */
	public $cName;

	/** @var int nStandard */
	public $nStandard;

	/** @var int nTyp */
	public $nTyp;
}
