<?php

namespace App\Db\Schema;

class tWarenlagerArtikelOptionen
{
	const TABLE_NAME = 'tWarenlagerArtikelOptionen';
	const kArtikel = 'kArtikel';
	const kWarenlager = 'kWarenlager';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const kWMSLagerBereich = 'kWMSLagerBereich';
	const fMindestMenge = 'fMindestMenge';
	const fVorschlag = 'fVorschlag';
	const fNachschiebenAb = 'fNachschiebenAb';
	const COLUMN_NAMES = [
		'kArtikel',
		'kWarenlager',
		'kWarenLagerPlatz',
		'kWMSLagerBereich',
		'fMindestMenge',
		'fVorschlag',
		'fNachschiebenAb',
	];
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
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
		'kWarenLagerPlatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWMSLagerBereich' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMindestMenge' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVorschlag' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fNachschiebenAb' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;

	/** @var int kWMSLagerBereich */
	public $kWMSLagerBereich;

	/** @var string fMindestMenge */
	public $fMindestMenge;

	/** @var string fVorschlag */
	public $fVorschlag;

	/** @var string fNachschiebenAb */
	public $fNachschiebenAb;
}
