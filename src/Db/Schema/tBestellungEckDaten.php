<?php

namespace App\Db\Schema;

class tBestellungEckDaten
{
	const TABLE_NAME = 'tBestellungEckDaten';
	const kBestellung = 'kBestellung';
	const fWert = 'fWert';
	const fZahlung = 'fZahlung';
	const fGutschrift = 'fGutschrift';
	const fGutschein = 'fGutschein';
	const fFaktor = 'fFaktor';
	const cWaehrung = 'cWaehrung';
	const COLUMN_NAMES = ['kBestellung', 'fWert', 'fZahlung', 'fGutschrift', 'fGutschein', 'fFaktor', 'cWaehrung'];
	const COLUMN_DEFINITIONS = [
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fWert' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fZahlung' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGutschrift' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGutschein' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fFaktor' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWaehrung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string fWert */
	public $fWert;

	/** @var string fZahlung */
	public $fZahlung;

	/** @var string fGutschrift */
	public $fGutschrift;

	/** @var string fGutschein */
	public $fGutschein;

	/** @var string fFaktor */
	public $fFaktor;

	/** @var string cWaehrung */
	public $cWaehrung;
}
