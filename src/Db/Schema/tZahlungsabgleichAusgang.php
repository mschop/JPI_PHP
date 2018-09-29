<?php

namespace App\Db\Schema;

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
	const COLUMN_NAMES = [
		'kZahlungsabgleichAusgang',
		'kZahlungsabgleichModul',
		'cKontoIdentifikation',
		'kZahlungsabgleichUmsatzEingang',
		'kZahlungsabgleichUmsatzAusgang',
		'kKunde',
		'kLieferant',
		'kGutschrift',
		'kEingangsrechnung',
		'fBetrag',
		'cWaehrungISO',
		'cName',
		'cKonto',
		'cKontozusatz',
		'cVerwendungszweck',
		'cInternerKommentar',
		'nVollstaendigerReferenzbetrag',
		'dAnlagedatum',
		'kAnlagebenutzer',
		'dBuchungsdatum',
		'kBuchungsbenutzer',
		'cTransaktionID',
		'kZahlungAusgang',
		'kZahlungEingang',
	];
	const COLUMN_DEFINITIONS = [
		'kZahlungsabgleichAusgang' => [
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
		'kZahlungsabgleichUmsatzEingang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kZahlungsabgleichUmsatzAusgang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kGutschrift' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEingangsrechnung' => [
			'type' => 'int',
			'phpType' => 'int',
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
		'nVollstaendigerReferenzbetrag' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAnlagedatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAnlagebenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dBuchungsdatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBuchungsbenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTransaktionID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'kZahlungAusgang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kZahlungEingang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

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
