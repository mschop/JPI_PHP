<?php

namespace App\Db\Schema;

class tFormular
{
	const TABLE_NAME = 'tFormular';
	const kFormular = 'kFormular';
	const nTyp = 'nTyp';
	const cName = 'cName';
	const nStandard = 'nStandard';
	const COLUMN_NAMES = ['kFormular', 'nTyp', 'cName', 'nStandard'];
	const COLUMN_DEFINITIONS = [
		'kFormular' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
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
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'nStandard' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kFormular */
	public $kFormular;

	/** @var int nTyp */
	public $nTyp;

	/** @var string cName */
	public $cName;

	/** @var int nStandard */
	public $nStandard;
}
