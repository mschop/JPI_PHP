<?php

namespace App\Schema;

class tEingangsrechnungZahlung
{
	const TABLE_NAME = 'tEingangsrechnungZahlung';
	const kEingangsrechnungZahlung = 'kEingangsrechnungZahlung';
	const cName = 'cName';
	const dDatum = 'dDatum';
	const fBetrag = 'fBetrag';
	const kEingangsrechnung = 'kEingangsrechnung';
	const kBenutzer = 'kBenutzer';
	const nAnzahlung = 'nAnzahlung';
	const cHinweis = 'cHinweis';
	const kZahlungsart = 'kZahlungsart';
	const cSKRManuell = 'cSKRManuell';

	/** @var int kEingangsrechnungZahlung */
	public $kEingangsrechnungZahlung;

	/** @var string cName */
	public $cName;

	/** @var string dDatum */
	public $dDatum;

	/** @var string fBetrag */
	public $fBetrag;

	/** @var int kEingangsrechnung */
	public $kEingangsrechnung;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nAnzahlung */
	public $nAnzahlung;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var int kZahlungsart */
	public $kZahlungsart;

	/** @var string cSKRManuell */
	public $cSKRManuell;
}
