<?php

namespace App\Schema;

class tVersandVorlage
{
	const TABLE_NAME = 'tVersandVorlage';
	const kVersandVorlage = 'kVersandVorlage';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const nStandard = 'nStandard';
	const dErstellt = 'dErstellt';
	const cTrennzeichen = 'cTrennzeichen';
	const nAbZeile = 'nAbZeile';
	const nIntKey = 'nIntKey';
	const nLieferscheinNr = 'nLieferscheinNr';
	const nVersandt = 'nVersandt';
	const nIdentcode = 'nIdentcode';
	const nVersandInfo = 'nVersandInfo';
	const nReserved = 'nReserved';
	const cDateFormat = 'cDateFormat';
	const kLogistik = 'kLogistik';

	/** @var int kVersandVorlage */
	public $kVersandVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int nStandard */
	public $nStandard;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cTrennzeichen */
	public $cTrennzeichen;

	/** @var int nAbZeile */
	public $nAbZeile;

	/** @var int nIntKey */
	public $nIntKey;

	/** @var int nLieferscheinNr */
	public $nLieferscheinNr;

	/** @var int nVersandt */
	public $nVersandt;

	/** @var int nIdentcode */
	public $nIdentcode;

	/** @var int nVersandInfo */
	public $nVersandInfo;

	/** @var int nReserved */
	public $nReserved;

	/** @var string cDateFormat */
	public $cDateFormat;

	/** @var int kLogistik */
	public $kLogistik;
}