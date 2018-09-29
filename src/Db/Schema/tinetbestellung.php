<?php

namespace App\Db\Schema;

class tinetbestellung
{
	const TABLE_NAME = 'tinetbestellung';
	const kInetBestellung = 'kInetBestellung';
	const kWarenkorb = 'kWarenkorb';
	const kKunde = 'kKunde';
	const kLieferAdresse = 'kLieferAdresse';
	const kVersandart = 'kVersandart';
	const cInetBestNr = 'cInetBestNr';
	const cVersandInfo = 'cVersandInfo';
	const dVersandDatum = 'dVersandDatum';
	const cTracking = 'cTracking';
	const cKommentar = 'cKommentar';
	const cAbgeholt = 'cAbgeholt';
	const cStatus = 'cStatus';
	const dTimestamp = 'dTimestamp';
	const kBestellHinweis = 'kBestellHinweis';
	const kShop = 'kShop';
	const kWaehrung = 'kWaehrung';
	const kSprache = 'kSprache';
	const fGutschein = 'fGutschein';
	const cModulID = 'cModulID';
	const nZahlungsTyp = 'nZahlungsTyp';
	const nHatUpload = 'nHatUpload';
	const cPUIZahlungsdaten = 'cPUIZahlungsdaten';
	const cKampagne = 'cKampagne';
	const cKampagneParam = 'cKampagneParam';
	const cKampagneName = 'cKampagneName';
	const cUserAgent = 'cUserAgent';
	const cReferrer = 'cReferrer';
	const nMaxLiefertage = 'nMaxLiefertage';
	const fFaktor = 'fFaktor';
	const COLUMN_NAMES = [
		'kInetBestellung',
		'kWarenkorb',
		'kKunde',
		'kLieferAdresse',
		'kVersandart',
		'cInetBestNr',
		'cVersandInfo',
		'dVersandDatum',
		'cTracking',
		'cKommentar',
		'cAbgeholt',
		'cStatus',
		'dTimestamp',
		'kBestellHinweis',
		'kShop',
		'kWaehrung',
		'kSprache',
		'fGutschein',
		'cModulID',
		'nZahlungsTyp',
		'nHatUpload',
		'cPUIZahlungsdaten',
		'cKampagne',
		'cKampagneParam',
		'cKampagneName',
		'cUserAgent',
		'cReferrer',
		'nMaxLiefertage',
		'fFaktor',
	];
	const COLUMN_DEFINITIONS = [
		'kInetBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenkorb' => [
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
		'kLieferAdresse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersandart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cInetBestNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cVersandInfo' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dVersandDatum' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 12,
			'characterSetName' => 'iso_1',
		],
		'cTracking' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAbgeholt' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cStatus' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'dTimestamp' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellHinweis' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWaehrung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGutschein' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cModulID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nZahlungsTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nHatUpload' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPUIZahlungsdaten' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cKampagne' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKampagneParam' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKampagneName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cUserAgent' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 512,
			'characterSetName' => 'iso_1',
		],
		'cReferrer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nMaxLiefertage' => [
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kInetBestellung */
	public $kInetBestellung;

	/** @var int kWarenkorb */
	public $kWarenkorb;

	/** @var int kKunde */
	public $kKunde;

	/** @var int kLieferAdresse */
	public $kLieferAdresse;

	/** @var int kVersandart */
	public $kVersandart;

	/** @var string cInetBestNr */
	public $cInetBestNr;

	/** @var string cVersandInfo */
	public $cVersandInfo;

	/** @var string dVersandDatum */
	public $dVersandDatum;

	/** @var string cTracking */
	public $cTracking;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var string cAbgeholt */
	public $cAbgeholt;

	/** @var string cStatus */
	public $cStatus;

	/** @var string dTimestamp */
	public $dTimestamp;

	/** @var int kBestellHinweis */
	public $kBestellHinweis;

	/** @var int kShop */
	public $kShop;

	/** @var int kWaehrung */
	public $kWaehrung;

	/** @var int kSprache */
	public $kSprache;

	/** @var string fGutschein */
	public $fGutschein;

	/** @var string cModulID */
	public $cModulID;

	/** @var int nZahlungsTyp */
	public $nZahlungsTyp;

	/** @var int nHatUpload */
	public $nHatUpload;

	/** @var string cPUIZahlungsdaten */
	public $cPUIZahlungsdaten;

	/** @var string cKampagne */
	public $cKampagne;

	/** @var string cKampagneParam */
	public $cKampagneParam;

	/** @var string cKampagneName */
	public $cKampagneName;

	/** @var string cUserAgent */
	public $cUserAgent;

	/** @var string cReferrer */
	public $cReferrer;

	/** @var int nMaxLiefertage */
	public $nMaxLiefertage;

	/** @var string fFaktor */
	public $fFaktor;
}
