<?php

namespace App\Db\Schema;

class trechnungnr
{
	const TABLE_NAME = 'trechnungnr';
	const kRechnungNr = 'kRechnungNr';
	const COLUMN_NAMES = ['kRechnungNr'];
	const COLUMN_DEFINITIONS = [
		'kRechnungNr' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kRechnungNr */
	public $kRechnungNr;
}
