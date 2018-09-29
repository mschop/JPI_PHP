<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kZahlungsabgleichUmsatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kZahlungsabgleichModul' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKontoIdentifikation' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cTransaktionID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'dBuchungsdatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fBetrag' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWaehrungISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 3,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 500,
			'characterSetName' => 'iso_1',
		],
		'cKonto' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 500,
			'characterSetName' => 'iso_1',
		],
		'cKontozusatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 500,
			'characterSetName' => 'iso_1',
		],
		'cVerwendungszweck' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'cInternerKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'dAbgleichszeitpunkt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSichtbar' => [
			'type' => 'bit',
			'phpType' => 'boolean',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nBuchungstyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
