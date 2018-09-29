<?php

namespace App\Db\Schema;

class tLieferantWarenlager
{
	const TABLE_NAME = 'tLieferantWarenlager';
	const kLieferantWarenlager = 'kLieferantWarenlager';
	const kLieferant = 'kLieferant';
	const kWarenlager = 'kWarenlager';
	const COLUMN_NAMES = ['kLieferantWarenlager', 'kLieferant', 'kWarenlager'];
	const COLUMN_DEFINITIONS = [
		'kLieferantWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLieferantWarenlager */
	public $kLieferantWarenlager;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kWarenlager */
	public $kWarenlager;
}
