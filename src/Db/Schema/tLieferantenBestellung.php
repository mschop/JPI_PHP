<?php

namespace App\Db\Schema;

class tLieferantenBestellung
{
	const TABLE_NAME = 'tLieferantenBestellung';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const kLieferant = 'kLieferant';
	const kSprache = 'kSprache';
	const kLieferantenBestellungRA = 'kLieferantenBestellungRA';
	const kLieferantenBestellungLA = 'kLieferantenBestellungLA';
	const cWaehrungISO = 'cWaehrungISO';
	const cInternerKommentar = 'cInternerKommentar';
	const cDruckAnmerkung = 'cDruckAnmerkung';
	const dGedruckt = 'dGedruckt';
	const dGemailt = 'dGemailt';
	const dGefaxt = 'dGefaxt';
	const nStatus = 'nStatus';
	const dErstellt = 'dErstellt';
	const kFirma = 'kFirma';
	const kLager = 'kLager';
	const kKunde = 'kKunde';
	const dLieferdatum = 'dLieferdatum';
	const cEigeneBestellnummer = 'cEigeneBestellnummer';
	const cBezugsAuftragsNummer = 'cBezugsAuftragsNummer';
	const nDropShipping = 'nDropShipping';
	const kLieferantenBestellungLieferant = 'kLieferantenBestellungLieferant';
	const kBenutzer = 'kBenutzer';
	const fFaktor = 'fFaktor';
	const dAngemahnt = 'dAngemahnt';
	const dInBearbeitung = 'dInBearbeitung';
	const nDeleted = 'nDeleted';
	const nManuellAbgeschlossen = 'nManuellAbgeschlossen';
	const cFremdbelegnummer = 'cFremdbelegnummer';
	const kLieferschein = 'kLieferschein';
	const nBestaetigt = 'nBestaetigt';
	const dExportiert = 'dExportiert';
	const COLUMN_NAMES = [
		'kLieferantenBestellung',
		'kLieferant',
		'kSprache',
		'kLieferantenBestellungRA',
		'kLieferantenBestellungLA',
		'cWaehrungISO',
		'cInternerKommentar',
		'cDruckAnmerkung',
		'dGedruckt',
		'dGemailt',
		'dGefaxt',
		'nStatus',
		'dErstellt',
		'kFirma',
		'kLager',
		'kKunde',
		'dLieferdatum',
		'cEigeneBestellnummer',
		'cBezugsAuftragsNummer',
		'nDropShipping',
		'kLieferantenBestellungLieferant',
		'kBenutzer',
		'fFaktor',
		'dAngemahnt',
		'dInBearbeitung',
		'nDeleted',
		'nManuellAbgeschlossen',
		'cFremdbelegnummer',
		'kLieferschein',
		'nBestaetigt',
		'dExportiert',
	];
	const COLUMN_DEFINITIONS = [
		'kLieferantenBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferantenBestellungRA' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferantenBestellungLA' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWaehrungISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'cInternerKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cDruckAnmerkung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dGedruckt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dGemailt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dGefaxt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'int',
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
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLieferdatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cEigeneBestellnummer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBezugsAuftragsNummer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nDropShipping' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferantenBestellungLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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
		'fFaktor' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAngemahnt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dInBearbeitung' => [
			'type' => 'datetime',
			'phpType' => 'string',
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
		'nManuellAbgeschlossen' => [
			'type' => 'tinyint',
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
		'kLieferschein' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nBestaetigt' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dExportiert' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLieferantenBestellung */
	public $kLieferantenBestellung;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kSprache */
	public $kSprache;

	/** @var int kLieferantenBestellungRA */
	public $kLieferantenBestellungRA;

	/** @var int kLieferantenBestellungLA */
	public $kLieferantenBestellungLA;

	/** @var string cWaehrungISO */
	public $cWaehrungISO;

	/** @var string cInternerKommentar */
	public $cInternerKommentar;

	/** @var string cDruckAnmerkung */
	public $cDruckAnmerkung;

	/** @var string dGedruckt */
	public $dGedruckt;

	/** @var string dGemailt */
	public $dGemailt;

	/** @var string dGefaxt */
	public $dGefaxt;

	/** @var int nStatus */
	public $nStatus;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kLager */
	public $kLager;

	/** @var int kKunde */
	public $kKunde;

	/** @var string dLieferdatum */
	public $dLieferdatum;

	/** @var string cEigeneBestellnummer */
	public $cEigeneBestellnummer;

	/** @var string cBezugsAuftragsNummer */
	public $cBezugsAuftragsNummer;

	/** @var int nDropShipping */
	public $nDropShipping;

	/** @var int kLieferantenBestellungLieferant */
	public $kLieferantenBestellungLieferant;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string fFaktor */
	public $fFaktor;

	/** @var string dAngemahnt */
	public $dAngemahnt;

	/** @var string dInBearbeitung */
	public $dInBearbeitung;

	/** @var int nDeleted */
	public $nDeleted;

	/** @var int nManuellAbgeschlossen */
	public $nManuellAbgeschlossen;

	/** @var string cFremdbelegnummer */
	public $cFremdbelegnummer;

	/** @var int kLieferschein */
	public $kLieferschein;

	/** @var int nBestaetigt */
	public $nBestaetigt;

	/** @var string dExportiert */
	public $dExportiert;
}
