<?php

namespace App\Db\Schema;

class tLieferantErlaubteLieferlaender
{
	const TABLE_NAME = 'tLieferantErlaubteLieferlaender';
	const kLieferant = 'kLieferant';
	const cIso = 'cIso';
	const COLUMN_NAMES = ['kLieferant', 'cIso'];
	const COLUMN_DEFINITIONS = [
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cIso' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string cIso */
	public $cIso;
}
