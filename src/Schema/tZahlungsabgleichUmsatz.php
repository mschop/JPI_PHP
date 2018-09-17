<?php

namespace App\Schema;

class tZahlungsabgleichUmsatz
{
	const TABLE_NAME = 'tZahlungsabgleichUmsatz';
	const kZahlungsabgleichUmsatz = 'kZahlungsabgleichUmsatz';
	const kZahlungsabgleichModul = 'kZahlungsabgleichModul';
	const cKontoIdentifikation = 'cKontoIdentifikation';
	const cTransaktionID = 'cTransaktionID';
	const dBuchungsdatum = 'dBuchungsdatum';
	const fBetrag = 'fBetrag';
	const cWaehrungISO = 'cWaehrungISO';
	const cName = 'cName';
	const cKonto = 'cKonto';
	const cKontozusatz = 'cKontozusatz';
	const cVerwendungszweck = 'cVerwendungszweck';
	const cInternerKommentar = 'cInternerKommentar';
	const dAbgleichszeitpunkt = 'dAbgleichszeitpunkt';
	const kBenutzer = 'kBenutzer';
	const nSichtbar = 'nSichtbar';
	const nBuchungstyp = 'nBuchungstyp';

	/** @var int kZahlungsabgleichUmsatz */
	public $kZahlungsabgleichUmsatz;

	/** @var int kZahlungsabgleichModul */
	public $kZahlungsabgleichModul;

	/** @var string cKontoIdentifikation */
	public $cKontoIdentifikation;

	/** @var string cTransaktionID */
	public $cTransaktionID;

	/** @var string dBuchungsdatum */
	public $dBuchungsdatum;

	/** @var string fBetrag */
	public $fBetrag;

	/** @var string cWaehrungISO */
	public $cWaehrungISO;

	/** @var string cName */
	public $cName;

	/** @var string cKonto */
	public $cKonto;

	/** @var string cKontozusatz */
	public $cKontozusatz;

	/** @var string cVerwendungszweck */
	public $cVerwendungszweck;

	/** @var string cInternerKommentar */
	public $cInternerKommentar;

	/** @var string dAbgleichszeitpunkt */
	public $dAbgleichszeitpunkt;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var boolean nSichtbar */
	public $nSichtbar;

	/** @var int nBuchungstyp */
	public $nBuchungstyp;
}
