<?php

namespace App\Db\Schema;

class tPicklisteVorlageEigeneFelder
{
	const TABLE_NAME = 'tPicklisteVorlageEigeneFelder';
	const kPicklisteVorlage = 'kPicklisteVorlage';
	const kAttribut = 'kAttribut';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kPicklisteVorlage', 'kAttribut', 'cWert'];
	const COLUMN_DEFINITIONS = [
		'kPicklisteVorlage' => [
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

	/** @var int kPicklisteVorlage */
	public $kPicklisteVorlage;

	/** @var int kAttribut */
	public $kAttribut;

	/** @var string cWert */
	public $cWert;
}
