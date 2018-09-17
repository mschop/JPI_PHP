<?php

namespace App\Schema;

class tZahlungsausgangLogeintrag
{
	const TABLE_NAME = 'tZahlungsausgangLogeintrag';
	const kZahlungsausgangLogeintrag = 'kZahlungsausgangLogeintrag';
	const kZahlungsabgleichLogsitzung = 'kZahlungsabgleichLogsitzung';
	const dZeitpunkt = 'dZeitpunkt';
	const nSchweregrad = 'nSchweregrad';
	const cMeldung = 'cMeldung';
	const kZahlungsabgleichModul = 'kZahlungsabgleichModul';
	const cKontoIdentifikation = 'cKontoIdentifikation';
	const kKunde = 'kKunde';
	const kGutschrift = 'kGutschrift';
	const fBetrag = 'fBetrag';
	const cVerwendungszweck = 'cVerwendungszweck';
	const dAnlagedatum = 'dAnlagedatum';
	const kAnlagebenutzer = 'kAnlagebenutzer';
	const dBuchungsdatum = 'dBuchungsdatum';
	const kBuchungsbenutzer = 'kBuchungsbenutzer';

	/** @var int kZahlungsausgangLogeintrag */
	public $kZahlungsausgangLogeintrag;

	/** @var int kZahlungsabgleichLogsitzung */
	public $kZahlungsabgleichLogsitzung;

	/** @var string dZeitpunkt */
	public $dZeitpunkt;

	/** @var int nSchweregrad */
	public $nSchweregrad;

	/** @var string cMeldung */
	public $cMeldung;

	/** @var int kZahlungsabgleichModul */
	public $kZahlungsabgleichModul;

	/** @var string cKontoIdentifikation */
	public $cKontoIdentifikation;

	/** @var int kKunde */
	public $kKunde;

	/** @var int kGutschrift */
	public $kGutschrift;

	/** @var string fBetrag */
	public $fBetrag;

	/** @var string cVerwendungszweck */
	public $cVerwendungszweck;

	/** @var string dAnlagedatum */
	public $dAnlagedatum;

	/** @var int kAnlagebenutzer */
	public $kAnlagebenutzer;

	/** @var string dBuchungsdatum */
	public $dBuchungsdatum;

	/** @var int kBuchungsbenutzer */
	public $kBuchungsbenutzer;
}
