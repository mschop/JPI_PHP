<?php

namespace App\Db\Schema;

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
	const COLUMN_NAMES = [
		'kZahlungsausgangLogeintrag',
		'kZahlungsabgleichLogsitzung',
		'dZeitpunkt',
		'nSchweregrad',
		'cMeldung',
		'kZahlungsabgleichModul',
		'cKontoIdentifikation',
		'kKunde',
		'kGutschrift',
		'fBetrag',
		'cVerwendungszweck',
		'dAnlagedatum',
		'kAnlagebenutzer',
		'dBuchungsdatum',
		'kBuchungsbenutzer',
	];
	const COLUMN_DEFINITIONS = [
		'kZahlungsausgangLogeintrag' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kZahlungsabgleichLogsitzung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dZeitpunkt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSchweregrad' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMeldung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 2048,
			'characterSetName' => 'iso_1',
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
		'kKunde' => [
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
		'fBetrag' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVerwendungszweck' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
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
			'isNullable' => false,
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
	];

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
