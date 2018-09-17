<?php

namespace App\Schema;

class tZahlungsart
{
	const TABLE_NAME = 'tZahlungsart';
	const kZahlungsart = 'kZahlungsart';
	const cName = 'cName';
	const cPrtString = 'cPrtString';
	const nLastschrift = 'nLastschrift';
	const cPrtStringVor = 'cPrtStringVor';
	const cPaymentOption = 'cPaymentOption';
	const cKonto = 'cKonto';
	const nAusliefernVorZahlung = 'nAusliefernVorZahlung';
	const nPrioritaet = 'nPrioritaet';
	const nMahnwesenAktiv = 'nMahnwesenAktiv';
	const fSkontoWert = 'fSkontoWert';
	const nSkontoZeitraum = 'nSkontoZeitraum';

	/** @var int kZahlungsart */
	public $kZahlungsart;

	/** @var string cName */
	public $cName;

	/** @var string cPrtString */
	public $cPrtString;

	/** @var int nLastschrift */
	public $nLastschrift;

	/** @var string cPrtStringVor */
	public $cPrtStringVor;

	/** @var string cPaymentOption */
	public $cPaymentOption;

	/** @var string cKonto */
	public $cKonto;

	/** @var int nAusliefernVorZahlung */
	public $nAusliefernVorZahlung;

	/** @var int nPrioritaet */
	public $nPrioritaet;

	/** @var int nMahnwesenAktiv */
	public $nMahnwesenAktiv;

	/** @var string fSkontoWert */
	public $fSkontoWert;

	/** @var int nSkontoZeitraum */
	public $nSkontoZeitraum;
}
