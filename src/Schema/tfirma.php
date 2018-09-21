<?php

namespace App\Schema;

class tfirma
{
	const TABLE_NAME = 'tfirma';
	const kFirma = 'kFirma';
	const cName = 'cName';
	const cUnternehmer = 'cUnternehmer';
	const cStrasse = 'cStrasse';
	const cPLZ = 'cPLZ';
	const cOrt = 'cOrt';
	const cLand = 'cLand';
	const cTel = 'cTel';
	const cFax = 'cFax';
	const cEMail = 'cEMail';
	const cWWW = 'cWWW';
	const cBLZ = 'cBLZ';
	const cKontoNr = 'cKontoNr';
	const cBank = 'cBank';
	const cSteuerNr = 'cSteuerNr';
	const cInet = 'cInet';
	const cIntrashipKdNr = 'cIntrashipKdNr';
	const cUPSKdNr = 'cUPSKdNr';
	const cIBAN = 'cIBAN';
	const cBIC = 'cBIC';
	const cKopfGrafik = 'cKopfGrafik';
	const cFusszeile = 'cFusszeile';
	const cKontoInhaber = 'cKontoInhaber';
	const cAktiv = 'cAktiv';
	const cGlaeubigerID = 'cGlaeubigerID';
	const cLandISO = 'cLandISO';
	const cPayPalEMail = 'cPayPalEMail';
	const COLUMN_NAMES = [
		'kFirma',
		'cName',
		'cUnternehmer',
		'cStrasse',
		'cPLZ',
		'cOrt',
		'cLand',
		'cTel',
		'cFax',
		'cEMail',
		'cWWW',
		'cBLZ',
		'cKontoNr',
		'cBank',
		'cSteuerNr',
		'cInet',
		'cIntrashipKdNr',
		'cUPSKdNr',
		'cIBAN',
		'cBIC',
		'cKopfGrafik',
		'cFusszeile',
		'cKontoInhaber',
		'cAktiv',
		'cGlaeubigerID',
		'cLandISO',
		'cPayPalEMail',
	];
	const COLUMN_TYPES = [
		'kFirma' => 'int',
		'cName' => 'varchar',
		'cUnternehmer' => 'varchar',
		'cStrasse' => 'varchar',
		'cPLZ' => 'varchar',
		'cOrt' => 'varchar',
		'cLand' => 'varchar',
		'cTel' => 'varchar',
		'cFax' => 'varchar',
		'cEMail' => 'varchar',
		'cWWW' => 'varchar',
		'cBLZ' => 'varchar',
		'cKontoNr' => 'varchar',
		'cBank' => 'varchar',
		'cSteuerNr' => 'varchar',
		'cInet' => 'char',
		'cIntrashipKdNr' => 'varchar',
		'cUPSKdNr' => 'varchar',
		'cIBAN' => 'varchar',
		'cBIC' => 'varchar',
		'cKopfGrafik' => 'varchar',
		'cFusszeile' => 'varchar',
		'cKontoInhaber' => 'varchar',
		'cAktiv' => 'char',
		'cGlaeubigerID' => 'varchar',
		'cLandISO' => 'varchar',
		'cPayPalEMail' => 'varchar',
	];

	/** @var int kFirma */
	public $kFirma;

	/** @var string cName */
	public $cName;

	/** @var string cUnternehmer */
	public $cUnternehmer;

	/** @var string cStrasse */
	public $cStrasse;

	/** @var string cPLZ */
	public $cPLZ;

	/** @var string cOrt */
	public $cOrt;

	/** @var string cLand */
	public $cLand;

	/** @var string cTel */
	public $cTel;

	/** @var string cFax */
	public $cFax;

	/** @var string cEMail */
	public $cEMail;

	/** @var string cWWW */
	public $cWWW;

	/** @var string cBLZ */
	public $cBLZ;

	/** @var string cKontoNr */
	public $cKontoNr;

	/** @var string cBank */
	public $cBank;

	/** @var string cSteuerNr */
	public $cSteuerNr;

	/** @var string cInet */
	public $cInet;

	/** @var string cIntrashipKdNr */
	public $cIntrashipKdNr;

	/** @var string cUPSKdNr */
	public $cUPSKdNr;

	/** @var string cIBAN */
	public $cIBAN;

	/** @var string cBIC */
	public $cBIC;

	/** @var string cKopfGrafik */
	public $cKopfGrafik;

	/** @var string cFusszeile */
	public $cFusszeile;

	/** @var string cKontoInhaber */
	public $cKontoInhaber;

	/** @var string cAktiv */
	public $cAktiv;

	/** @var string cGlaeubigerID */
	public $cGlaeubigerID;

	/** @var string cLandISO */
	public $cLandISO;

	/** @var string cPayPalEMail */
	public $cPayPalEMail;
}
