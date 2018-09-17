<?php

namespace App\Schema;

class tEingangsrechnungPos
{
	const TABLE_NAME = 'tEingangsrechnungPos';
	const kEingangsrechnungPos = 'kEingangsrechnungPos';
	const kEingangsrechnung = 'kEingangsrechnung';
	const kLieferantenbestellung = 'kLieferantenbestellung';
	const kArtikel = 'kArtikel';
	const cArtNr = 'cArtNr';
	const cLieferantenArtNr = 'cLieferantenArtNr';
	const cName = 'cName';
	const cLieferantenBezeichnung = 'cLieferantenBezeichnung';
	const cEinheit = 'cEinheit';
	const cHinweis = 'cHinweis';
	const fMenge = 'fMenge';
	const fEKNetto = 'fEKNetto';
	const fMwSt = 'fMwSt';
	const nPosTyp = 'nPosTyp';

	/** @var int kEingangsrechnungPos */
	public $kEingangsrechnungPos;

	/** @var int kEingangsrechnung */
	public $kEingangsrechnung;

	/** @var int kLieferantenbestellung */
	public $kLieferantenbestellung;

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

	/** @var string cEinheit */
	public $cEinheit;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var string fMenge */
	public $fMenge;

	/** @var string fEKNetto */
	public $fEKNetto;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var int nPosTyp */
	public $nPosTyp;
}
