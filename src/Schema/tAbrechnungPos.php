<?php

namespace App\Schema;

class tAbrechnungPos
{
	const TABLE_NAME = 'tAbrechnungPos';
	const kAbrechnungPos = 'kAbrechnungPos';
	const kAbrechnung = 'kAbrechnung';
	const kArtikel = 'kArtikel';
	const kAbrechnungStueckliste = 'kAbrechnungStueckliste';
	const cBezeichnung = 'cBezeichnung';
	const cArtNr = 'cArtNr';
	const cEinheit = 'cEinheit';
	const fAnzahl = 'fAnzahl';
	const fVKNetto = 'fVKNetto';
	const fMwSt = 'fMwSt';
	const fVKPreis = 'fVKPreis';
	const fRabatt = 'fRabatt';
	const nSort = 'nSort';
	const cHinweis = 'cHinweis';
	const nType = 'nType';
	const COLUMN_NAMES = [
		'kAbrechnungPos',
		'kAbrechnung',
		'kArtikel',
		'kAbrechnungStueckliste',
		'cBezeichnung',
		'cArtNr',
		'cEinheit',
		'fAnzahl',
		'fVKNetto',
		'fMwSt',
		'fVKPreis',
		'fRabatt',
		'nSort',
		'cHinweis',
		'nType',
	];
	const COLUMN_TYPES = [
		'kAbrechnungPos' => 'int',
		'kAbrechnung' => 'int',
		'kArtikel' => 'int',
		'kAbrechnungStueckliste' => 'int',
		'cBezeichnung' => 'varchar',
		'cArtNr' => 'varchar',
		'cEinheit' => 'varchar',
		'fAnzahl' => 'decimal',
		'fVKNetto' => 'decimal',
		'fMwSt' => 'decimal',
		'fVKPreis' => 'decimal',
		'fRabatt' => 'decimal',
		'nSort' => 'int',
		'cHinweis' => 'nvarchar',
		'nType' => 'tinyint',
	];

	/** @var int kAbrechnungPos */
	public $kAbrechnungPos;

	/** @var int kAbrechnung */
	public $kAbrechnung;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kAbrechnungStueckliste */
	public $kAbrechnungStueckliste;

	/** @var string cBezeichnung */
	public $cBezeichnung;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var string cEinheit */
	public $cEinheit;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string fVKNetto */
	public $fVKNetto;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var string fVKPreis */
	public $fVKPreis;

	/** @var string fRabatt */
	public $fRabatt;

	/** @var int nSort */
	public $nSort;

	/** @var resource cHinweis */
	public $cHinweis;

	/** @var int nType */
	public $nType;
}
