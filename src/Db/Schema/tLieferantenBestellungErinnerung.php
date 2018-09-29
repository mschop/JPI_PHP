<?php

namespace App\Db\Schema;

class tLieferantenBestellungErinnerung
{
	const TABLE_NAME = 'tLieferantenBestellungErinnerung';
	const kLieferantenBestellungErinnerung = 'kLieferantenBestellungErinnerung';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const kBenutzer = 'kBenutzer';
	const dDatum = 'dDatum';
	const COLUMN_NAMES = ['kLieferantenBestellungErinnerung', 'kLieferantenBestellung', 'kBenutzer', 'dDatum'];
	const COLUMN_DEFINITIONS = [
		'kLieferantenBestellungErinnerung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferantenBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
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
		'dDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLieferantenBestellungErinnerung */
	public $kLieferantenBestellungErinnerung;

	/** @var int kLieferantenBestellung */
	public $kLieferantenBestellung;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dDatum */
	public $dDatum;
}
