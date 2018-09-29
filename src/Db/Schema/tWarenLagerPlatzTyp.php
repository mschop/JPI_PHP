<?php

namespace App\Db\Schema;

class tWarenLagerPlatzTyp
{
	const TABLE_NAME = 'tWarenLagerPlatzTyp';
	const kWarenLagerPlatzTyp = 'kWarenLagerPlatzTyp';
	const cName = 'cName';
	const COLUMN_NAMES = ['kWarenLagerPlatzTyp', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kWarenLagerPlatzTyp' => [
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

	/** @var int kWarenLagerPlatzTyp */
	public $kWarenLagerPlatzTyp;

	/** @var string cName */
	public $cName;
}
