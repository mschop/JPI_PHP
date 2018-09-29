<?php

namespace App\Db\Schema;

class tVersandKonfigurationEigeneFelder
{
	const TABLE_NAME = 'tVersandKonfigurationEigeneFelder';
	const kVersandKonfiguration = 'kVersandKonfiguration';
	const kAttribut = 'kAttribut';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kVersandKonfiguration', 'kAttribut', 'cWert'];
	const COLUMN_DEFINITIONS = [
		'kVersandKonfiguration' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAttribut' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kVersandKonfiguration */
	public $kVersandKonfiguration;

	/** @var int kAttribut */
	public $kAttribut;

	/** @var string cWert */
	public $cWert;
}
