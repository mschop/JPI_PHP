<?php

namespace App\Schema;

class tWarenLager
{
	const TABLE_NAME = 'tWarenLager';
	const kWarenLager = 'kWarenLager';
	const cName = 'cName';
	const cKuerzel = 'cKuerzel';
	const cLagerTyp = 'cLagerTyp';
	const cBeschreibung = 'cBeschreibung';
	const cStrasse = 'cStrasse';
	const cPLZ = 'cPLZ';
	const cOrt = 'cOrt';
	const cLand = 'cLand';
	const cAnsprechpartnerAnrede = 'cAnsprechpartnerAnrede';
	const cAnsprechpartnerVorname = 'cAnsprechpartnerVorname';
	const cAnsprechpartnerName = 'cAnsprechpartnerName';
	const cAnsprechpartnerTel = 'cAnsprechpartnerTel';
	const cAnsprechpartnerFax = 'cAnsprechpartnerFax';
	const cAnsprechpartnerEMail = 'cAnsprechpartnerEMail';
	const cAnsprechpartnerAbteilung = 'cAnsprechpartnerAbteilung';
	const cBundesland = 'cBundesland';
	const kFirma = 'kFirma';
	const kUser = 'kUser';
	const nFulfillment = 'nFulfillment';
	const nLagerplatzVerwaltung = 'nLagerplatzVerwaltung';
	const nAuslieferungsPrio = 'nAuslieferungsPrio';
	const nPackStationAktiv = 'nPackStationAktiv';
	const cDimension1Name = 'cDimension1Name';
	const cDimension1Trennzeichen = 'cDimension1Trennzeichen';
	const nDimension1Laenge = 'nDimension1Laenge';
	const nDimension1Typ = 'nDimension1Typ';
	const cDimension2Name = 'cDimension2Name';
	const cDimension2Trennzeichen = 'cDimension2Trennzeichen';
	const nDimension2Laenge = 'nDimension2Laenge';
	const nDimension2Typ = 'nDimension2Typ';
	const cDimension3Name = 'cDimension3Name';
	const cDimension3Trennzeichen = 'cDimension3Trennzeichen';
	const nDimension3Laenge = 'nDimension3Laenge';
	const nDimension3Typ = 'nDimension3Typ';
	const cDimension4Name = 'cDimension4Name';
	const cDimension4Trennzeichen = 'cDimension4Trennzeichen';
	const nDimension4Laenge = 'nDimension4Laenge';
	const nDimension4Typ = 'nDimension4Typ';
	const cDimension5Name = 'cDimension5Name';
	const cDimension5Trennzeichen = 'cDimension5Trennzeichen';
	const nDimension5Laenge = 'nDimension5Laenge';
	const nDimension5Typ = 'nDimension5Typ';
	const cEmpfaengerFirma = 'cEmpfaengerFirma';
	const kQuellLager = 'kQuellLager';
	const kZielLager = 'kZielLager';
	const nAktiv = 'nAktiv';
	const cJfwid = 'cJfwid';

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var string cName */
	public $cName;

	/** @var string cKuerzel */
	public $cKuerzel;

	/** @var string cLagerTyp */
	public $cLagerTyp;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var string cStrasse */
	public $cStrasse;

	/** @var string cPLZ */
	public $cPLZ;

	/** @var string cOrt */
	public $cOrt;

	/** @var string cLand */
	public $cLand;

	/** @var string cAnsprechpartnerAnrede */
	public $cAnsprechpartnerAnrede;

	/** @var string cAnsprechpartnerVorname */
	public $cAnsprechpartnerVorname;

	/** @var string cAnsprechpartnerName */
	public $cAnsprechpartnerName;

	/** @var string cAnsprechpartnerTel */
	public $cAnsprechpartnerTel;

	/** @var string cAnsprechpartnerFax */
	public $cAnsprechpartnerFax;

	/** @var string cAnsprechpartnerEMail */
	public $cAnsprechpartnerEMail;

	/** @var string cAnsprechpartnerAbteilung */
	public $cAnsprechpartnerAbteilung;

	/** @var string cBundesland */
	public $cBundesland;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kUser */
	public $kUser;

	/** @var int nFulfillment */
	public $nFulfillment;

	/** @var int nLagerplatzVerwaltung */
	public $nLagerplatzVerwaltung;

	/** @var int nAuslieferungsPrio */
	public $nAuslieferungsPrio;

	/** @var int nPackStationAktiv */
	public $nPackStationAktiv;

	/** @var string cDimension1Name */
	public $cDimension1Name;

	/** @var string cDimension1Trennzeichen */
	public $cDimension1Trennzeichen;

	/** @var int nDimension1Laenge */
	public $nDimension1Laenge;

	/** @var int nDimension1Typ */
	public $nDimension1Typ;

	/** @var string cDimension2Name */
	public $cDimension2Name;

	/** @var string cDimension2Trennzeichen */
	public $cDimension2Trennzeichen;

	/** @var int nDimension2Laenge */
	public $nDimension2Laenge;

	/** @var int nDimension2Typ */
	public $nDimension2Typ;

	/** @var string cDimension3Name */
	public $cDimension3Name;

	/** @var string cDimension3Trennzeichen */
	public $cDimension3Trennzeichen;

	/** @var int nDimension3Laenge */
	public $nDimension3Laenge;

	/** @var int nDimension3Typ */
	public $nDimension3Typ;

	/** @var string cDimension4Name */
	public $cDimension4Name;

	/** @var string cDimension4Trennzeichen */
	public $cDimension4Trennzeichen;

	/** @var int nDimension4Laenge */
	public $nDimension4Laenge;

	/** @var int nDimension4Typ */
	public $nDimension4Typ;

	/** @var string cDimension5Name */
	public $cDimension5Name;

	/** @var string cDimension5Trennzeichen */
	public $cDimension5Trennzeichen;

	/** @var int nDimension5Laenge */
	public $nDimension5Laenge;

	/** @var int nDimension5Typ */
	public $nDimension5Typ;

	/** @var string cEmpfaengerFirma */
	public $cEmpfaengerFirma;

	/** @var int kQuellLager */
	public $kQuellLager;

	/** @var int kZielLager */
	public $kZielLager;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var string cJfwid */
	public $cJfwid;
}
