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
	const COLUMN_NAMES = [
		'kEingangsrechnungZahlung',
		'cName',
		'dDatum',
		'fBetrag',
		'kEingangsrechnung',
		'kBenutzer',
		'nAnzahlung',
		'cHinweis',
		'kZahlungsart',
		'cSKRManuell',
	];
	const COLUMN_TYPES = [
		'kEingangsrechnungZahlung' => 'int',
		'cName' => 'varchar',
		'dDatum' => 'datetime',
		'fBetrag' => 'decimal',
		'kEingangsrechnung' => 'int',
		'kBenutzer' => 'int',
		'nAnzahlung' => 'tinyint',
		'cHinweis' => 'varchar',
		'kZahlungsart' => 'int',
		'cSKRManuell' => 'varchar',
	];

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
