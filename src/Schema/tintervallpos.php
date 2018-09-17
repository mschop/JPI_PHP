<?php

namespace App\Schema;

class tintervallpos
{
	const TABLE_NAME = 'tintervallpos';
	const kIntervallPos = 'kIntervallPos';
	const kArtikel = 'kArtikel';
	const kIntervall = 'kIntervall';
	const fVKPreis = 'fVKPreis';
	const fMwSt = 'fMwSt';
	const nAnzahl = 'nAnzahl';
	const fRabatt = 'fRabatt';
	const cString = 'cString';
	const fVKNetto = 'fVKNetto';
	const cArtNr = 'cArtNr';
	const nType = 'nType';
	const cHinweis = 'cHinweis';

	/** @var int kIntervallPos */
	public $kIntervallPos;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kIntervall */
	public $kIntervall;

	/** @var string fVKPreis */
	public $fVKPreis;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var string nAnzahl */
	public $nAnzahl;

	/** @var string fRabatt */
	public $fRabatt;

	/** @var string cString */
	public $cString;

	/** @var string fVKNetto */
	public $fVKNetto;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var int nType */
	public $nType;

	/** @var string cHinweis */
	public $cHinweis;
}
