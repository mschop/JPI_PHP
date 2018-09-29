<?php

namespace App\Db\Schema;

class tVersandlager
{
	const TABLE_NAME = 'tVersandlager';
	const kWarenlager = 'kWarenlager';
	const nTyp = 'nTyp';
	const COLUMN_NAMES = ['kWarenlager', 'nTyp'];
	const COLUMN_DEFINITIONS = [
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int nTyp */
	public $nTyp;
}
