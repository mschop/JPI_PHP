<?php

namespace App\Schema;

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
