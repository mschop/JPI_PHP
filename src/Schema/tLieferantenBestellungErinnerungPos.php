<?php

namespace App\Schema;

class tLieferantenBestellungErinnerungPos
{
	const TABLE_NAME = 'tLieferantenBestellungErinnerungPos';
	const kLieferantenBestellungErinnerung = 'kLieferantenBestellungErinnerung';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const kLieferantenBestellungPos = 'kLieferantenBestellungPos';
	const fAnzahl = 'fAnzahl';

	/** @var int kLieferantenBestellungErinnerung */
	public $kLieferantenBestellungErinnerung;

	/** @var int kLieferantenBestellung */
	public $kLieferantenBestellung;

	/** @var int kLieferantenBestellungPos */
	public $kLieferantenBestellungPos;

	/** @var string fAnzahl */
	public $fAnzahl;
}
