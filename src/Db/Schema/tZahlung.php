<?php

namespace App\Db\Schema;

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
	const COLUMN_NAMES = [
		'kZahlung',
		'cName',
		'dDatum',
		'fBetrag',
		'kBestellung',
		'kBenutzer',
		'nAnzahlung',
		'cHinweis',
		'kZahlungsart',
		'nKeinExport',
		'cSKRManuell',
		'cExternalTransactionId',
		'kZahlungsabgleichUmsatz',
		'nZuweisungstyp',
		'nZahlungstyp',
		'cZuweisungsinfo',
		'nZuweisungswertung',
	];
	const COLUMN_DEFINITIONS = [
		'kZahlung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fBetrag' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2000,
			'characterSetName' => 'iso_1',
		],
		'kZahlungsart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKeinExport' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSKRManuell' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cExternalTransactionId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kZahlungsabgleichUmsatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nZuweisungstyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nZahlungstyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cZuweisungsinfo' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'nZuweisungswertung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

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
