<?php

namespace App\Db\Schema;

class tLieferantSperre
{
	const TABLE_NAME = 'tLieferantSperre';
	const kLieferant = 'kLieferant';
	const cName = 'cName';
	const COLUMN_NAMES = ['kLieferant', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string cName */
	public $cName;
}
