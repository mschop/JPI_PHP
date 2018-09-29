<?php

namespace App\Db\Schema;

class tWarenLagerDimensionTyp
{
	const TABLE_NAME = 'tWarenLagerDimensionTyp';
	const kWarenLagerDimensionTyp = 'kWarenLagerDimensionTyp';
	const cName = 'cName';
	const COLUMN_NAMES = ['kWarenLagerDimensionTyp', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kWarenLagerDimensionTyp' => [
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

	/** @var int kWarenLagerDimensionTyp */
	public $kWarenLagerDimensionTyp;

	/** @var string cName */
	public $cName;
}
