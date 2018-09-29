<?php

namespace App\Db\Schema;

class tbestellnr
{
	const TABLE_NAME = 'tbestellnr';
	const kBestellNr = 'kBestellNr';
	const COLUMN_NAMES = ['kBestellNr'];
	const COLUMN_DEFINITIONS = [
		'kBestellNr' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBestellNr */
	public $kBestellNr;
}
