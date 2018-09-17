<?php

namespace App\Schema;

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
