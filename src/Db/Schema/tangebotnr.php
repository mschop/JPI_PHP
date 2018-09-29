<?php

namespace App\Db\Schema;

class tangebotnr
{
	const TABLE_NAME = 'tangebotnr';
	const kAngebotNr = 'kAngebotNr';
	const COLUMN_NAMES = ['kAngebotNr'];
	const COLUMN_DEFINITIONS = [
		'kAngebotNr' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAngebotNr */
	public $kAngebotNr;
}
