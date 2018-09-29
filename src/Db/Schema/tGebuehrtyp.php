<?php

namespace App\Db\Schema;

class tGebuehrtyp
{
	const TABLE_NAME = 'tGebuehrtyp';
	const kGebuehrtyp = 'kGebuehrtyp';
	const cName = 'cName';
	const cNameExtern = 'cNameExtern';
	const nTyp = 'nTyp';
	const COLUMN_NAMES = ['kGebuehrtyp', 'cName', 'cNameExtern', 'nTyp'];
	const COLUMN_DEFINITIONS = [
		'kGebuehrtyp' => [
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
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cNameExtern' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'nTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kGebuehrtyp */
	public $kGebuehrtyp;

	/** @var string cName */
	public $cName;

	/** @var string cNameExtern */
	public $cNameExtern;

	/** @var int nTyp */
	public $nTyp;
}
