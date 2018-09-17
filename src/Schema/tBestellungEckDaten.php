<?php

namespace App\Schema;

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
