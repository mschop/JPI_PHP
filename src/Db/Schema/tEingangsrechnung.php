<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kEingangsrechnung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAnsprechpartner' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFremdbelegnummer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cEigeneRechnungsnummer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cHinweise' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferant' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAdresszusatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cStrasse' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cPLZ' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cOrt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLandISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'cBundesland' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cTel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cFax' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cMobil' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cMail' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nStatus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDeleted' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nZahlungFreigegeben' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKumuliert' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dBezahlt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dZahlungsziel' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fFremdFaktor' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVerteilungsArt' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dBelegdatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
