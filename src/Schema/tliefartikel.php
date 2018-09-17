<?php

namespace App\Schema;

class tliefartikel
{
	const TABLE_NAME = 'tliefartikel';
	const kLiefArtikel = 'kLiefArtikel';
	const tArtikel_kArtikel = 'tArtikel_kArtikel';
	const tLieferant_kLieferant = 'tLieferant_kLieferant';
	const fEKBrutto = 'fEKBrutto';
	const fEKNetto = 'fEKNetto';
	const cLiefArtNr = 'cLiefArtNr';
	const cWaehrung = 'cWaehrung';
	const cLiefFrist = 'cLiefFrist';
	const nLieferbar = 'nLieferbar';
	const cSonstiges = 'cSonstiges';
	const nStandard = 'nStandard';
	const nMindestAbnahme = 'nMindestAbnahme';
	const nAbnahmeIntervall = 'nAbnahmeIntervall';
	const fLagerbestand = 'fLagerbestand';
	const nLieferzeit = 'nLieferzeit';
	const nDropShipping = 'nDropShipping';
	const nDropShippingStandard = 'nDropShippingStandard';
	const cName = 'cName';
	const fDurchschnittlicheLieferzeit = 'fDurchschnittlicheLieferzeit';
	const nLagerBeachten = 'nLagerBeachten';
	const dLBGeaendert = 'dLBGeaendert';
	const cVPEEinheit = 'cVPEEinheit';
	const nVPEMenge = 'nVPEMenge';
	const fMwSt = 'fMwSt';
	const nLieferzeitAusLieferant = 'nLieferzeitAusLieferant';

	/** @var int kLiefArtikel */
	public $kLiefArtikel;

	/** @var int tArtikel_kArtikel */
	public $tArtikel_kArtikel;

	/** @var int tLieferant_kLieferant */
	public $tLieferant_kLieferant;

	/** @var string fEKBrutto */
	public $fEKBrutto;

	/** @var string fEKNetto */
	public $fEKNetto;

	/** @var string cLiefArtNr */
	public $cLiefArtNr;

	/** @var string cWaehrung */
	public $cWaehrung;

	/** @var string cLiefFrist */
	public $cLiefFrist;

	/** @var int nLieferbar */
	public $nLieferbar;

	/** @var string cSonstiges */
	public $cSonstiges;

	/** @var int nStandard */
	public $nStandard;

	/** @var int nMindestAbnahme */
	public $nMindestAbnahme;

	/** @var string nAbnahmeIntervall */
	public $nAbnahmeIntervall;

	/** @var string fLagerbestand */
	public $fLagerbestand;

	/** @var int nLieferzeit */
	public $nLieferzeit;

	/** @var int nDropShipping */
	public $nDropShipping;

	/** @var int nDropShippingStandard */
	public $nDropShippingStandard;

	/** @var string cName */
	public $cName;

	/** @var string fDurchschnittlicheLieferzeit */
	public $fDurchschnittlicheLieferzeit;

	/** @var int nLagerBeachten */
	public $nLagerBeachten;

	/** @var string dLBGeaendert */
	public $dLBGeaendert;

	/** @var string cVPEEinheit */
	public $cVPEEinheit;

	/** @var int nVPEMenge */
	public $nVPEMenge;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var int nLieferzeitAusLieferant */
	public $nLieferzeitAusLieferant;
}
