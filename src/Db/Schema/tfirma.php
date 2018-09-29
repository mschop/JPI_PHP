<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cUnternehmer' => [
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
			'characterMaximumLength' => 50,
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
		'cLand' => [
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
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cFax' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cEMail' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cWWW' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBLZ' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cKontoNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cBank' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cSteuerNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 25,
			'characterSetName' => 'iso_1',
		],
		'cInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cIntrashipKdNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 15,
			'characterSetName' => 'iso_1',
		],
		'cUPSKdNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 15,
			'characterSetName' => 'iso_1',
		],
		'cIBAN' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cBIC' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cKopfGrafik' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cFusszeile' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKontoInhaber' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAktiv' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cGlaeubigerID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 35,
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
		'cPayPalEMail' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 250,
			'characterSetName' => 'iso_1',
		],
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
