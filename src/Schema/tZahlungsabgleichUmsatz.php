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
	const COLUMN_NAMES = [
		'kZahlungsabgleichUmsatz',
		'kZahlungsabgleichModul',
		'cKontoIdentifikation',
		'cTransaktionID',
		'dBuchungsdatum',
		'fBetrag',
		'cWaehrungISO',
		'cName',
		'cKonto',
		'cKontozusatz',
		'cVerwendungszweck',
		'cInternerKommentar',
		'dAbgleichszeitpunkt',
		'kBenutzer',
		'nSichtbar',
		'nBuchungstyp',
	];
	const COLUMN_TYPES = [
		'kZahlungsabgleichUmsatz' => 'int',
		'kZahlungsabgleichModul' => 'int',
		'cKontoIdentifikation' => 'varchar',
		'cTransaktionID' => 'varchar',
		'dBuchungsdatum' => 'datetime',
		'fBetrag' => 'decimal',
		'cWaehrungISO' => 'varchar',
		'cName' => 'varchar',
		'cKonto' => 'varchar',
		'cKontozusatz' => 'varchar',
		'cVerwendungszweck' => 'varchar',
		'cInternerKommentar' => 'varchar',
		'dAbgleichszeitpunkt' => 'datetime',
		'kBenutzer' => 'int',
		'nSichtbar' => 'bit',
		'nBuchungstyp' => 'int',
	];

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
