<?php

namespace App\Schema;

class tLieferantenBestellungErinnerung
{
	const TABLE_NAME = 'tLieferantenBestellungErinnerung';
	const kLieferantenBestellungErinnerung = 'kLieferantenBestellungErinnerung';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const kBenutzer = 'kBenutzer';
	const dDatum = 'dDatum';

	/** @var int kLieferantenBestellungErinnerung */
	public $kLieferantenBestellungErinnerung;

	/** @var int kLieferantenBestellung */
	public $kLieferantenBestellung;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dDatum */
	public $dDatum;
}
