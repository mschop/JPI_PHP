<?php

namespace App\Schema;

class tAdressExportVorlage
{
	const TABLE_NAME = 'tAdressExportVorlage';
	const kAdressExportVorlage = 'kAdressExportVorlage';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const nStandard = 'nStandard';
	const dErstellt = 'dErstellt';
	const cTrennzeichen = 'cTrennzeichen';
	const cKomma = 'cKomma';
	const nKopfzeile = 'nKopfzeile';
	const cPfad = 'cPfad';
	const nZusatzzeile = 'nZusatzzeile';

	/** @var int kAdressExportVorlage */
	public $kAdressExportVorlage;

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

	/** @var string cKomma */
	public $cKomma;

	/** @var int nKopfzeile */
	public $nKopfzeile;

	/** @var string cPfad */
	public $cPfad;

	/** @var int nZusatzzeile */
	public $nZusatzzeile;
}
