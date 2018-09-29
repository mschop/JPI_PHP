<?php

namespace App\Db\Schema;

class tZustandWarengruppe
{
	const TABLE_NAME = 'tZustandWarengruppe';
	const kZustandWarengruppe = 'kZustandWarengruppe';
	const kZustand = 'kZustand';
	const kWarengruppe = 'kWarengruppe';
	const COLUMN_NAMES = ['kZustandWarengruppe', 'kZustand', 'kWarengruppe'];
	const COLUMN_DEFINITIONS = [
		'kZustandWarengruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kZustand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarengruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kZustandWarengruppe */
	public $kZustandWarengruppe;

	/** @var int kZustand */
	public $kZustand;

	/** @var int kWarengruppe */
	public $kWarengruppe;
}
