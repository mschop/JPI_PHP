<?php

namespace App\Schema;

class tEingangsrechnung
{
	const TABLE_NAME = 'tEingangsrechnung';
	const kEingangsrechnung = 'kEingangsrechnung';
	const kBenutzer = 'kBenutzer';
	const kLieferant = 'kLieferant';
	const kAnsprechpartner = 'kAnsprechpartner';
	const cFremdbelegnummer = 'cFremdbelegnummer';
	const cEigeneRechnungsnummer = 'cEigeneRechnungsnummer';
	const cHinweise = 'cHinweise';
	const cLieferant = 'cLieferant';
	const cAdresszusatz = 'cAdresszusatz';
	const cStrasse = 'cStrasse';
	const cPLZ = 'cPLZ';
	const cOrt = 'cOrt';
	const cLandISO = 'cLandISO';
	const cBundesland = 'cBundesland';
	const cTel = 'cTel';
	const cFax = 'cFax';
	const cMobil = 'cMobil';
	const cMail = 'cMail';
	const nStatus = 'nStatus';
	const nDeleted = 'nDeleted';
	const nZahlungFreigegeben = 'nZahlungFreigegeben';
	const dErstellt = 'dErstellt';
	const nKumuliert = 'nKumuliert';
	const dBezahlt = 'dBezahlt';
	const dZahlungsziel = 'dZahlungsziel';
	const fFremdFaktor = 'fFremdFaktor';
	const nVerteilungsArt = 'nVerteilungsArt';
	const dBelegdatum = 'dBelegdatum';
	const COLUMN_NAMES = [
		'kEingangsrechnung',
		'kBenutzer',
		'kLieferant',
		'kAnsprechpartner',
		'cFremdbelegnummer',
		'cEigeneRechnungsnummer',
		'cHinweise',
		'cLieferant',
		'cAdresszusatz',
		'cStrasse',
		'cPLZ',
		'cOrt',
		'cLandISO',
		'cBundesland',
		'cTel',
		'cFax',
		'cMobil',
		'cMail',
		'nStatus',
		'nDeleted',
		'nZahlungFreigegeben',
		'dErstellt',
		'nKumuliert',
		'dBezahlt',
		'dZahlungsziel',
		'fFremdFaktor',
		'nVerteilungsArt',
		'dBelegdatum',
	];
	const COLUMN_TYPES = [
		'kEingangsrechnung' => 'int',
		'kBenutzer' => 'int',
		'kLieferant' => 'int',
		'kAnsprechpartner' => 'int',
		'cFremdbelegnummer' => 'varchar',
		'cEigeneRechnungsnummer' => 'varchar',
		'cHinweise' => 'varchar',
		'cLieferant' => 'varchar',
		'cAdresszusatz' => 'varchar',
		'cStrasse' => 'varchar',
		'cPLZ' => 'varchar',
		'cOrt' => 'varchar',
		'cLandISO' => 'varchar',
		'cBundesland' => 'varchar',
		'cTel' => 'varchar',
		'cFax' => 'varchar',
		'cMobil' => 'varchar',
		'cMail' => 'varchar',
		'nStatus' => 'tinyint',
		'nDeleted' => 'tinyint',
		'nZahlungFreigegeben' => 'tinyint',
		'dErstellt' => 'datetime',
		'nKumuliert' => 'tinyint',
		'dBezahlt' => 'datetime',
		'dZahlungsziel' => 'datetime',
		'fFremdFaktor' => 'decimal',
		'nVerteilungsArt' => 'tinyint',
		'dBelegdatum' => 'datetime',
	];

	/** @var int kEingangsrechnung */
	public $kEingangsrechnung;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kAnsprechpartner */
	public $kAnsprechpartner;

	/** @var string cFremdbelegnummer */
	public $cFremdbelegnummer;

	/** @var string cEigeneRechnungsnummer */
	public $cEigeneRechnungsnummer;

	/** @var string cHinweise */
	public $cHinweise;

	/** @var string cLieferant */
	public $cLieferant;

	/** @var string cAdresszusatz */
	public $cAdresszusatz;

	/** @var string cStrasse */
	public $cStrasse;

	/** @var string cPLZ */
	public $cPLZ;

	/** @var string cOrt */
	public $cOrt;

	/** @var string cLandISO */
	public $cLandISO;

	/** @var string cBundesland */
	public $cBundesland;

	/** @var string cTel */
	public $cTel;

	/** @var string cFax */
	public $cFax;

	/** @var string cMobil */
	public $cMobil;

	/** @var string cMail */
	public $cMail;

	/** @var int nStatus */
	public $nStatus;

	/** @var int nDeleted */
	public $nDeleted;

	/** @var int nZahlungFreigegeben */
	public $nZahlungFreigegeben;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nKumuliert */
	public $nKumuliert;

	/** @var string dBezahlt */
	public $dBezahlt;

	/** @var string dZahlungsziel */
	public $dZahlungsziel;

	/** @var string fFremdFaktor */
	public $fFremdFaktor;

	/** @var int nVerteilungsArt */
	public $nVerteilungsArt;

	/** @var string dBelegdatum */
	public $dBelegdatum;
}
