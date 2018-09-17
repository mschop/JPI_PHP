<?php

namespace App\Schema;

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
