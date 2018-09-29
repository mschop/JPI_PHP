<?php

namespace App\Db\Schema;

class tLfdnrKunde
{
	const TABLE_NAME = 'tLfdnrKunde';
	const nNummer = 'nNummer';
	const COLUMN_NAMES = ['nNummer'];
	const COLUMN_DEFINITIONS = [
		'nNummer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int nNummer */
	public $nNummer;
}
