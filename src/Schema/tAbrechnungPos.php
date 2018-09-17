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
