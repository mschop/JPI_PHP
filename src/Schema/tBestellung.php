<?php

namespace App\Schema;

class tBestellung
{
	const TABLE_NAME = 'tBestellung';
	const kBestellung = 'kBestellung';
	const tRechnung_kRechnung = 'tRechnung_kRechnung';
	const tBenutzer_kBenutzer = 'tBenutzer_kBenutzer';
	const tAdresse_kAdresse = 'tAdresse_kAdresse';
	const tText_kText = 'tText_kText';
	const tKunde_kKunde = 'tKunde_kKunde';
	const cBestellNr = 'cBestellNr';
	const cType = 'cType';
	const cAnmerkung = 'cAnmerkung';
	const dErstellt = 'dErstellt';
	const nZahlungsziel = 'nZahlungsziel';
	const tVersandArt_kVersandArt = 'tVersandArt_kVersandArt';
	const fVersandBruttoPreis = 'fVersandBruttoPreis';
	const fRabatt = 'fRabatt';
	const kInetBestellung = 'kInetBestellung';
	const cVersandInfo = 'cVersandInfo';
	const dVersandt = 'dVersandt';
	const cIdentCode = 'cIdentCode';
	const cBeschreibung = 'cBeschreibung';
	const cInet = 'cInet';
	const dLieferdatum = 'dLieferdatum';
	const kBestellHinweis = 'kBestellHinweis';
	const cErloeskonto = 'cErloeskonto';
	const cWaehrung = 'cWaehrung';
	const fFaktor = 'fFaktor';
	const kShop = 'kShop';
	const kFirma = 'kFirma';
	const kLogistik = 'kLogistik';
	const nPlatform = 'nPlatform';
	const kSprache = 'kSprache';
	const fGutschein = 'fGutschein';
	const dGedruckt = 'dGedruckt';
	const dMailVersandt = 'dMailVersandt';
	const cInetBestellNr = 'cInetBestellNr';
	const kZahlungsArt = 'kZahlungsArt';
	const kLieferAdresse = 'kLieferAdresse';
	const kRechnungsAdresse = 'kRechnungsAdresse';
	const nIGL = 'nIGL';
	const nUStFrei = 'nUStFrei';
	const cStatus = 'cStatus';
	const dVersandMail = 'dVersandMail';
	const dZahlungsMail = 'dZahlungsMail';
	const cUserName = 'cUserName';
	const cVerwendungszweck = 'cVerwendungszweck';
	const fSkonto = 'fSkonto';
	const kColor = 'kColor';
	const nStorno = 'nStorno';
	const cModulID = 'cModulID';
	const nZahlungsTyp = 'nZahlungsTyp';
	const nHatUpload = 'nHatUpload';
	const fZusatzGewicht = 'fZusatzGewicht';
	const nKomplettAusgeliefert = 'nKomplettAusgeliefert';
	const dBezahlt = 'dBezahlt';
	const kSplitBestellung = 'kSplitBestellung';
	const cPUIZahlungsdaten = 'cPUIZahlungsdaten';
	const nPrio = 'nPrio';
	const cVersandlandISO = 'cVersandlandISO';
	const cUstId = 'cUstId';
	const nPremium = 'nPremium';
	const cVersandlandWaehrung = 'cVersandlandWaehrung';
	const fVersandlandWaehrungFaktor = 'fVersandlandWaehrungFaktor';
	const kRueckhalteGrund = 'kRueckhalteGrund';
	const cJfoid = 'cJfoid';
	const kFulfillmentLieferant = 'kFulfillmentLieferant';
	const cKundenauftragsnummer = 'cKundenauftragsnummer';
	const nIstReadOnly = 'nIstReadOnly';
	const cAmazonServiceLevel = 'cAmazonServiceLevel';
	const nIstExterneRechnung = 'nIstExterneRechnung';
	const cKampagne = 'cKampagne';
	const cKampagneParam = 'cKampagneParam';
	const cKampagneName = 'cKampagneName';
	const cUserAgent = 'cUserAgent';
	const cReferrer = 'cReferrer';
	const nMaxLiefertage = 'nMaxLiefertage';

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int tRechnung_kRechnung */
	public $tRechnung_kRechnung;

	/** @var int tBenutzer_kBenutzer */
	public $tBenutzer_kBenutzer;

	/** @var int tAdresse_kAdresse */
	public $tAdresse_kAdresse;

	/** @var int tText_kText */
	public $tText_kText;

	/** @var int tKunde_kKunde */
	public $tKunde_kKunde;

	/** @var string cBestellNr */
	public $cBestellNr;

	/** @var string cType */
	public $cType;

	/** @var string cAnmerkung */
	public $cAnmerkung;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nZahlungsziel */
	public $nZahlungsziel;

	/** @var int tVersandArt_kVersandArt */
	public $tVersandArt_kVersandArt;

	/** @var string fVersandBruttoPreis */
	public $fVersandBruttoPreis;

	/** @var string fRabatt */
	public $fRabatt;

	/** @var int kInetBestellung */
	public $kInetBestellung;

	/** @var string cVersandInfo */
	public $cVersandInfo;

	/** @var string dVersandt */
	public $dVersandt;

	/** @var string cIdentCode */
	public $cIdentCode;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var string cInet */
	public $cInet;

	/** @var string dLieferdatum */
	public $dLieferdatum;

	/** @var int kBestellHinweis */
	public $kBestellHinweis;

	/** @var string cErloeskonto */
	public $cErloeskonto;

	/** @var string cWaehrung */
	public $cWaehrung;

	/** @var string fFaktor */
	public $fFaktor;

	/** @var int kShop */
	public $kShop;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kLogistik */
	public $kLogistik;

	/** @var int nPlatform */
	public $nPlatform;

	/** @var int kSprache */
	public $kSprache;

	/** @var string fGutschein */
	public $fGutschein;

	/** @var string dGedruckt */
	public $dGedruckt;

	/** @var string dMailVersandt */
	public $dMailVersandt;

	/** @var string cInetBestellNr */
	public $cInetBestellNr;

	/** @var int kZahlungsArt */
	public $kZahlungsArt;

	/** @var int kLieferAdresse */
	public $kLieferAdresse;

	/** @var int kRechnungsAdresse */
	public $kRechnungsAdresse;

	/** @var int nIGL */
	public $nIGL;

	/** @var int nUStFrei */
	public $nUStFrei;

	/** @var string cStatus */
	public $cStatus;

	/** @var string dVersandMail */
	public $dVersandMail;

	/** @var string dZahlungsMail */
	public $dZahlungsMail;

	/** @var string cUserName */
	public $cUserName;

	/** @var string cVerwendungszweck */
	public $cVerwendungszweck;

	/** @var string fSkonto */
	public $fSkonto;

	/** @var int kColor */
	public $kColor;

	/** @var int nStorno */
	public $nStorno;

	/** @var string cModulID */
	public $cModulID;

	/** @var int nZahlungsTyp */
	public $nZahlungsTyp;

	/** @var int nHatUpload */
	public $nHatUpload;

	/** @var string fZusatzGewicht */
	public $fZusatzGewicht;

	/** @var int nKomplettAusgeliefert */
	public $nKomplettAusgeliefert;

	/** @var string dBezahlt */
	public $dBezahlt;

	/** @var int kSplitBestellung */
	public $kSplitBestellung;

	/** @var string cPUIZahlungsdaten */
	public $cPUIZahlungsdaten;

	/** @var int nPrio */
	public $nPrio;

	/** @var string cVersandlandISO */
	public $cVersandlandISO;

	/** @var string cUstId */
	public $cUstId;

	/** @var int nPremium */
	public $nPremium;

	/** @var string cVersandlandWaehrung */
	public $cVersandlandWaehrung;

	/** @var string fVersandlandWaehrungFaktor */
	public $fVersandlandWaehrungFaktor;

	/** @var int kRueckhalteGrund */
	public $kRueckhalteGrund;

	/** @var string cJfoid */
	public $cJfoid;

	/** @var int kFulfillmentLieferant */
	public $kFulfillmentLieferant;

	/** @var string cKundenauftragsnummer */
	public $cKundenauftragsnummer;

	/** @var boolean nIstReadOnly */
	public $nIstReadOnly;

	/** @var string cAmazonServiceLevel */
	public $cAmazonServiceLevel;

	/** @var boolean nIstExterneRechnung */
	public $nIstExterneRechnung;

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
}
