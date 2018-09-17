<?php

namespace App\Schema;

class tZahlungsabgleichAusgang
{
	const TABLE_NAME = 'tZahlungsabgleichAusgang';
	const kZahlungsabgleichAusgang = 'kZahlungsabgleichAusgang';
	const kZahlungsabgleichModul = 'kZahlungsabgleichModul';
	const cKontoIdentifikation = 'cKontoIdentifikation';
	const kZahlungsabgleichUmsatzEingang = 'kZahlungsabgleichUmsatzEingang';
	const kZahlungsabgleichUmsatzAusgang = 'kZahlungsabgleichUmsatzAusgang';
	const kKunde = 'kKunde';
	const kLieferant = 'kLieferant';
	const kGutschrift = 'kGutschrift';
	const kEingangsrechnung = 'kEingangsrechnung';
	const fBetrag = 'fBetrag';
	const cWaehrungISO = 'cWaehrungISO';
	const cName = 'cName';
	const cKonto = 'cKonto';
	const cKontozusatz = 'cKontozusatz';
	const cVerwendungszweck = 'cVerwendungszweck';
	const cInternerKommentar = 'cInternerKommentar';
	const nVollstaendigerReferenzbetrag = 'nVollstaendigerReferenzbetrag';
	const dAnlagedatum = 'dAnlagedatum';
	const kAnlagebenutzer = 'kAnlagebenutzer';
	const dBuchungsdatum = 'dBuchungsdatum';
	const kBuchungsbenutzer = 'kBuchungsbenutzer';
	const cTransaktionID = 'cTransaktionID';
	const kZahlungAusgang = 'kZahlungAusgang';
	const kZahlungEingang = 'kZahlungEingang';

	/** @var int kZahlungsabgleichAusgang */
	public $kZahlungsabgleichAusgang;

	/** @var int kZahlungsabgleichModul */
	public $kZahlungsabgleichModul;

	/** @var string cKontoIdentifikation */
	public $cKontoIdentifikation;

	/** @var int kZahlungsabgleichUmsatzEingang */
	public $kZahlungsabgleichUmsatzEingang;

	/** @var int kZahlungsabgleichUmsatzAusgang */
	public $kZahlungsabgleichUmsatzAusgang;

	/** @var int kKunde */
	public $kKunde;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kGutschrift */
	public $kGutschrift;

	/** @var int kEingangsrechnung */
	public $kEingangsrechnung;

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

	/** @var int nVollstaendigerReferenzbetrag */
	public $nVollstaendigerReferenzbetrag;

	/** @var string dAnlagedatum */
	public $dAnlagedatum;

	/** @var int kAnlagebenutzer */
	public $kAnlagebenutzer;

	/** @var string dBuchungsdatum */
	public $dBuchungsdatum;

	/** @var int kBuchungsbenutzer */
	public $kBuchungsbenutzer;

	/** @var string cTransaktionID */
	public $cTransaktionID;

	/** @var int kZahlungAusgang */
	public $kZahlungAusgang;

	/** @var int kZahlungEingang */
	public $kZahlungEingang;
}
