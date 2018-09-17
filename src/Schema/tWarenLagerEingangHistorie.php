<?php

namespace App\Schema;

class tWarenLagerEingangHistorie
{
	const TABLE_NAME = 'tWarenLagerEingangHistorie';
	const kWarenLagerEingangHistorie = 'kWarenLagerEingangHistorie';
	const kWarenLagerEingang = 'kWarenLagerEingang';
	const kWarenLagerPlatzStart = 'kWarenLagerPlatzStart';
	const kWarenLagerPlatzZiel = 'kWarenLagerPlatzZiel';
	const dZeitstempel = 'dZeitstempel';
	const kBenutzer = 'kBenutzer';
	const cKommentar = 'cKommentar';
	const kBuchungsArt = 'kBuchungsArt';
	const kSessionID = 'kSessionID';
	const fAnzahl = 'fAnzahl';
	const kLHMStart = 'kLHMStart';
	const kLHMZiel = 'kLHMZiel';

	/** @var int kWarenLagerEingangHistorie */
	public $kWarenLagerEingangHistorie;

	/** @var int kWarenLagerEingang */
	public $kWarenLagerEingang;

	/** @var int kWarenLagerPlatzStart */
	public $kWarenLagerPlatzStart;

	/** @var int kWarenLagerPlatzZiel */
	public $kWarenLagerPlatzZiel;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var int kBuchungsArt */
	public $kBuchungsArt;

	/** @var int kSessionID */
	public $kSessionID;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int kLHMStart */
	public $kLHMStart;

	/** @var int kLHMZiel */
	public $kLHMZiel;
}
