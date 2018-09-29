<?php

namespace App\Db\Schema;

class tWaehrungAlt
{
	const TABLE_NAME = 'tWaehrungAlt';
	const kWaehrung = 'kWaehrung';
	const dAktualisiert = 'dAktualisiert';
	const fFaktorAlt = 'fFaktorAlt';
	const fFaktorNeu = 'fFaktorNeu';
	const COLUMN_NAMES = ['kWaehrung', 'dAktualisiert', 'fFaktorAlt', 'fFaktorNeu'];
	const COLUMN_DEFINITIONS = [
		'kWaehrung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAktualisiert' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fFaktorAlt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fFaktorNeu' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWaehrung */
	public $kWaehrung;

	/** @var string dAktualisiert */
	public $dAktualisiert;

	/** @var string fFaktorAlt */
	public $fFaktorAlt;

	/** @var string fFaktorNeu */
	public $fFaktorNeu;
}
