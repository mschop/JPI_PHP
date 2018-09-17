<?php

namespace App\Schema;

class tZahlung
{
	const TABLE_NAME = 'tZahlung';
	const kZahlung = 'kZahlung';
	const cName = 'cName';
	const dDatum = 'dDatum';
	const fBetrag = 'fBetrag';
	const kBestellung = 'kBestellung';
	const kBenutzer = 'kBenutzer';
	const nAnzahlung = 'nAnzahlung';
	const cHinweis = 'cHinweis';
	const kZahlungsart = 'kZahlungsart';
	const nKeinExport = 'nKeinExport';
	const cSKRManuell = 'cSKRManuell';
	const cExternalTransactionId = 'cExternalTransactionId';
	const kZahlungsabgleichUmsatz = 'kZahlungsabgleichUmsatz';
	const nZuweisungstyp = 'nZuweisungstyp';
	const nZahlungstyp = 'nZahlungstyp';
	const cZuweisungsinfo = 'cZuweisungsinfo';
	const nZuweisungswertung = 'nZuweisungswertung';

	/** @var int kZahlung */
	public $kZahlung;

	/** @var string cName */
	public $cName;

	/** @var string dDatum */
	public $dDatum;

	/** @var string fBetrag */
	public $fBetrag;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nAnzahlung */
	public $nAnzahlung;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var int kZahlungsart */
	public $kZahlungsart;

	/** @var int nKeinExport */
	public $nKeinExport;

	/** @var string cSKRManuell */
	public $cSKRManuell;

	/** @var string cExternalTransactionId */
	public $cExternalTransactionId;

	/** @var int kZahlungsabgleichUmsatz */
	public $kZahlungsabgleichUmsatz;

	/** @var int nZuweisungstyp */
	public $nZuweisungstyp;

	/** @var int nZahlungstyp */
	public $nZahlungstyp;

	/** @var string cZuweisungsinfo */
	public $cZuweisungsinfo;

	/** @var int nZuweisungswertung */
	public $nZuweisungswertung;
}
