<?php

namespace App\Db\Schema;

class tLieferantenBestellungErinnerungPos
{
	const TABLE_NAME = 'tLieferantenBestellungErinnerungPos';
	const kLieferantenBestellungErinnerung = 'kLieferantenBestellungErinnerung';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const kLieferantenBestellungPos = 'kLieferantenBestellungPos';
	const fAnzahl = 'fAnzahl';
	const COLUMN_NAMES = ['kLieferantenBestellungErinnerung', 'kLieferantenBestellung', 'kLieferantenBestellungPos', 'fAnzahl'];
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferantenBestellungPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLieferantenBestellungErinnerung */
	public $kLieferantenBestellungErinnerung;

	/** @var int kLieferantenBestellung */
	public $kLieferantenBestellung;

	/** @var int kLieferantenBestellungPos */
	public $kLieferantenBestellungPos;

	/** @var string fAnzahl */
	public $fAnzahl;
}
