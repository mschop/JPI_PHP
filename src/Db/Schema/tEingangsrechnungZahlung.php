<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kEingangsrechnungZahlung' => [
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
		'kEingangsrechnung' => [
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
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
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
		'cSKRManuell' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
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
