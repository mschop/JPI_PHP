<?php

namespace App\Db\Schema;

class tlieferant
{
	const TABLE_NAME = 'tlieferant';
	const kLieferant = 'kLieferant';
	const cLiefNr = 'cLiefNr';
	const cFirma = 'cFirma';
	const cKontakt = 'cKontakt';
	const cStrasse = 'cStrasse';
	const cPLZ = 'cPLZ';
	const cOrt = 'cOrt';
	const cLand = 'cLand';
	const cTelZentralle = 'cTelZentralle';
	const cTelDurchwahl = 'cTelDurchwahl';
	const cFax = 'cFax';
	const cEMail = 'cEMail';
	const cWWW = 'cWWW';
	const cAnmerkung = 'cAnmerkung';
	const dErstellt = 'dErstellt';
	const cAktiv = 'cAktiv';
	const cUstid = 'cUstid';
	const cISO = 'cISO';
	const kSprache = 'kSprache';
	const cStatus = 'cStatus';
	const cLieferantID = 'cLieferantID';
	const nKreditorennr = 'nKreditorennr';
	const cWaehrungISO = 'cWaehrungISO';
	const nVSTFrei = 'nVSTFrei';
	const cExterneDatenUrl = 'cExterneDatenUrl';
	const nDropshipping = 'nDropshipping';
	const nLieferzeit = 'nLieferzeit';
	const nZahlungsziel = 'nZahlungsziel';
	const fSkonto = 'fSkonto';
	const fMindestbestellwert = 'fMindestbestellwert';
	const fMindermengenzuschlag = 'fMindermengenzuschlag';
	const fFrachtkosten = 'fFrachtkosten';
	const fVersandfreiAb = 'fVersandfreiAb';
	const cHinweisLieferbedingung = 'cHinweisLieferbedingung';
	const cFirmenZusatz = 'cFirmenZusatz';
	const cAdresszusatz = 'cAdresszusatz';
	const cBundesland = 'cBundesland';
	const nSkontoTage = 'nSkontoTage';
	const nStaffelPreisProBestellung = 'nStaffelPreisProBestellung';
	const nKeineEinkaufsliste = 'nKeineEinkaufsliste';
	const cAnrede = 'cAnrede';
	const cVorname = 'cVorname';
	const cNachname = 'cNachname';
	const nDropshippingBeiNachnahme = 'nDropshippingBeiNachnahme';
	const nStandardFirma = 'nStandardFirma';
	const nStandardLager = 'nStandardLager';
	const fMwStFreiposition = 'fMwStFreiposition';
	const nDropshippingFreipositionen = 'nDropshippingFreipositionen';
	const nJtlFulfillment = 'nJtlFulfillment';
	const COLUMN_NAMES = [
		'kLieferant',
		'cLiefNr',
		'cFirma',
		'cKontakt',
		'cStrasse',
		'cPLZ',
		'cOrt',
		'cLand',
		'cTelZentralle',
		'cTelDurchwahl',
		'cFax',
		'cEMail',
		'cWWW',
		'cAnmerkung',
		'dErstellt',
		'cAktiv',
		'cUstid',
		'cISO',
		'kSprache',
		'cStatus',
		'cLieferantID',
		'nKreditorennr',
		'cWaehrungISO',
		'nVSTFrei',
		'cExterneDatenUrl',
		'nDropshipping',
		'nLieferzeit',
		'nZahlungsziel',
		'fSkonto',
		'fMindestbestellwert',
		'fMindermengenzuschlag',
		'fFrachtkosten',
		'fVersandfreiAb',
		'cHinweisLieferbedingung',
		'cFirmenZusatz',
		'cAdresszusatz',
		'cBundesland',
		'nSkontoTage',
		'nStaffelPreisProBestellung',
		'nKeineEinkaufsliste',
		'cAnrede',
		'cVorname',
		'cNachname',
		'nDropshippingBeiNachnahme',
		'nStandardFirma',
		'nStandardLager',
		'fMwStFreiposition',
		'nDropshippingFreipositionen',
		'nJtlFulfillment',
	];
	const COLUMN_DEFINITIONS = [
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLiefNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cFirma' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKontakt' => [
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
			'characterMaximumLength' => 10,
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
		'cTelZentralle' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cTelDurchwahl' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
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
		'cAnmerkung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAktiv' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cUstid' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cStatus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferantID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'nKreditorennr' => [
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'nVSTFrei' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cExterneDatenUrl' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nDropshipping' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLieferzeit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nZahlungsziel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fSkonto' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMindestbestellwert' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMindermengenzuschlag' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fFrachtkosten' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVersandfreiAb' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHinweisLieferbedingung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'cFirmenZusatz' => [
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
		'cBundesland' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSkontoTage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStaffelPreisProBestellung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKeineEinkaufsliste' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAnrede' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cVorname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 126,
			'characterSetName' => 'iso_1',
		],
		'cNachname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 126,
			'characterSetName' => 'iso_1',
		],
		'nDropshippingBeiNachnahme' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStandardFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStandardLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMwStFreiposition' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDropshippingFreipositionen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nJtlFulfillment' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string cLiefNr */
	public $cLiefNr;

	/** @var string cFirma */
	public $cFirma;

	/** @var string cKontakt */
	public $cKontakt;

	/** @var string cStrasse */
	public $cStrasse;

	/** @var string cPLZ */
	public $cPLZ;

	/** @var string cOrt */
	public $cOrt;

	/** @var string cLand */
	public $cLand;

	/** @var string cTelZentralle */
	public $cTelZentralle;

	/** @var string cTelDurchwahl */
	public $cTelDurchwahl;

	/** @var string cFax */
	public $cFax;

	/** @var string cEMail */
	public $cEMail;

	/** @var string cWWW */
	public $cWWW;

	/** @var string cAnmerkung */
	public $cAnmerkung;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cAktiv */
	public $cAktiv;

	/** @var string cUstid */
	public $cUstid;

	/** @var string cISO */
	public $cISO;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cStatus */
	public $cStatus;

	/** @var string cLieferantID */
	public $cLieferantID;

	/** @var int nKreditorennr */
	public $nKreditorennr;

	/** @var string cWaehrungISO */
	public $cWaehrungISO;

	/** @var int nVSTFrei */
	public $nVSTFrei;

	/** @var string cExterneDatenUrl */
	public $cExterneDatenUrl;

	/** @var int nDropshipping */
	public $nDropshipping;

	/** @var int nLieferzeit */
	public $nLieferzeit;

	/** @var int nZahlungsziel */
	public $nZahlungsziel;

	/** @var string fSkonto */
	public $fSkonto;

	/** @var string fMindestbestellwert */
	public $fMindestbestellwert;

	/** @var string fMindermengenzuschlag */
	public $fMindermengenzuschlag;

	/** @var string fFrachtkosten */
	public $fFrachtkosten;

	/** @var string fVersandfreiAb */
	public $fVersandfreiAb;

	/** @var string cHinweisLieferbedingung */
	public $cHinweisLieferbedingung;

	/** @var string cFirmenZusatz */
	public $cFirmenZusatz;

	/** @var string cAdresszusatz */
	public $cAdresszusatz;

	/** @var string cBundesland */
	public $cBundesland;

	/** @var int nSkontoTage */
	public $nSkontoTage;

	/** @var int nStaffelPreisProBestellung */
	public $nStaffelPreisProBestellung;

	/** @var int nKeineEinkaufsliste */
	public $nKeineEinkaufsliste;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var string cVorname */
	public $cVorname;

	/** @var string cNachname */
	public $cNachname;

	/** @var int nDropshippingBeiNachnahme */
	public $nDropshippingBeiNachnahme;

	/** @var int nStandardFirma */
	public $nStandardFirma;

	/** @var int nStandardLager */
	public $nStandardLager;

	/** @var string fMwStFreiposition */
	public $fMwStFreiposition;

	/** @var int nDropshippingFreipositionen */
	public $nDropshippingFreipositionen;

	/** @var int nJtlFulfillment */
	public $nJtlFulfillment;
}
