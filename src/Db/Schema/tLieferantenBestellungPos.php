<?php

namespace App\Db\Schema;

class tLieferantenBestellungPos
{
	const TABLE_NAME = 'tLieferantenBestellungPos';
	const kLieferantenBestellungPos = 'kLieferantenBestellungPos';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const kArtikel = 'kArtikel';
	const cArtNr = 'cArtNr';
	const cLieferantenArtNr = 'cLieferantenArtNr';
	const cName = 'cName';
	const cLieferantenBezeichnung = 'cLieferantenBezeichnung';
	const fUST = 'fUST';
	const fMenge = 'fMenge';
	const cHinweis = 'cHinweis';
	const fEKNetto = 'fEKNetto';
	const nPosTyp = 'nPosTyp';
	const cNameLieferant = 'cNameLieferant';
	const nLiefertage = 'nLiefertage';
	const dLieferdatum = 'dLieferdatum';
	const nSort = 'nSort';
	const kLieferscheinPos = 'kLieferscheinPos';
	const cVPEEinheit = 'cVPEEinheit';
	const nVPEMenge = 'nVPEMenge';
	const fMengeGeliefert = 'fMengeGeliefert';
	const COLUMN_NAMES = [
		'kLieferantenBestellungPos',
		'kLieferantenBestellung',
		'kArtikel',
		'cArtNr',
		'cLieferantenArtNr',
		'cName',
		'cLieferantenBezeichnung',
		'fUST',
		'fMenge',
		'cHinweis',
		'fEKNetto',
		'nPosTyp',
		'cNameLieferant',
		'nLiefertage',
		'dLieferdatum',
		'nSort',
		'kLieferscheinPos',
		'cVPEEinheit',
		'nVPEMenge',
		'fMengeGeliefert',
	];
	const COLUMN_DEFINITIONS = [
		'kLieferantenBestellungPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferantenBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cArtNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferantenArtNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferantenBezeichnung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fUST' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMenge' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
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
		'fEKNetto' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPosTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cNameLieferant' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nLiefertage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLieferdatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferscheinPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVPEEinheit' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nVPEMenge' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMengeGeliefert' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLieferantenBestellungPos */
	public $kLieferantenBestellungPos;

	/** @var int kLieferantenBestellung */
	public $kLieferantenBestellung;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var string cLieferantenArtNr */
	public $cLieferantenArtNr;

	/** @var string cName */
	public $cName;

	/** @var string cLieferantenBezeichnung */
	public $cLieferantenBezeichnung;

	/** @var string fUST */
	public $fUST;

	/** @var string fMenge */
	public $fMenge;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var string fEKNetto */
	public $fEKNetto;

	/** @var int nPosTyp */
	public $nPosTyp;

	/** @var string cNameLieferant */
	public $cNameLieferant;

	/** @var int nLiefertage */
	public $nLiefertage;

	/** @var string dLieferdatum */
	public $dLieferdatum;

	/** @var int nSort */
	public $nSort;

	/** @var int kLieferscheinPos */
	public $kLieferscheinPos;

	/** @var string cVPEEinheit */
	public $cVPEEinheit;

	/** @var int nVPEMenge */
	public $nVPEMenge;

	/** @var string fMengeGeliefert */
	public $fMengeGeliefert;
}
