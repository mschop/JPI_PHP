<?php

namespace App\Db\Schema;

class tBestellungWMSFreigabe
{
	const TABLE_NAME = 'tBestellungWMSFreigabe';
	const kBestellungWMSFreigabe = 'kBestellungWMSFreigabe';
	const kBestellung = 'kBestellung';
	const dZeitstempel = 'dZeitstempel';
	const kBenutzer = 'kBenutzer';
	const nTeillieferungErlaubt = 'nTeillieferungErlaubt';
	const nVorkommissionieren = 'nVorkommissionieren';
	const nAktiv = 'nAktiv';
	const nSperre = 'nSperre';
	const COLUMN_NAMES = [
		'kBestellungWMSFreigabe',
		'kBestellung',
		'dZeitstempel',
		'kBenutzer',
		'nTeillieferungErlaubt',
		'nVorkommissionieren',
		'nAktiv',
		'nSperre',
	];
	const COLUMN_DEFINITIONS = [
		'kBestellungWMSFreigabe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dZeitstempel' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTeillieferungErlaubt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVorkommissionieren' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAktiv' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSperre' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBestellungWMSFreigabe */
	public $kBestellungWMSFreigabe;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nTeillieferungErlaubt */
	public $nTeillieferungErlaubt;

	/** @var int nVorkommissionieren */
	public $nVorkommissionieren;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var int nSperre */
	public $nSperre;
}
