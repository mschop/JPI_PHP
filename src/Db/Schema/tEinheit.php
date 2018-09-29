<?php

namespace App\Db\Schema;

class tEinheit
{
	const TABLE_NAME = 'tEinheit';
	const kEinheit = 'kEinheit';
	const nIstUnsichtbar = 'nIstUnsichtbar';
	const COLUMN_NAMES = ['kEinheit', 'nIstUnsichtbar'];
	const COLUMN_DEFINITIONS = [
		'kEinheit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstUnsichtbar' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEinheit */
	public $kEinheit;

	/** @var int nIstUnsichtbar */
	public $nIstUnsichtbar;
}
