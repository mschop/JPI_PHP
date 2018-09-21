<?php

namespace App\Schema;

class tkunde
{
	const TABLE_NAME = 'tkunde';
	const kKunde = 'kKunde';
	const kInetKunde = 'kInetKunde';
	const kKundenKategorie = 'kKundenKategorie';
	const cKundenNr = 'cKundenNr';
	const cFirma = 'cFirma';
	const cAnrede = 'cAnrede';
	const cTitel = 'cTitel';
	const cVorname = 'cVorname';
	const cName = 'cName';
	const cStrasse = 'cStrasse';
	const cPLZ = 'cPLZ';
	const cOrt = 'cOrt';
	const cLand = 'cLand';
	const cTel = 'cTel';
	const cFax = 'cFax';
	const cEMail = 'cEMail';
	const cAnmerkung = 'cAnmerkung';
	const dErstellt = 'dErstellt';
	const cAktiv = 'cAktiv';
	const cMobil = 'cMobil';
	const cHaendler = 'cHaendler';
	const fRabatt = 'fRabatt';
	const cUSTID = 'cUSTID';
	const cNewsletter = 'cNewsletter';
	const cZusatz = 'cZusatz';
	const cZHaenden = 'cZHaenden';
	const cEbayName = 'cEbayName';
	const kBuyer = 'kBuyer';
	const cAdressZusatz = 'cAdressZusatz';
	const cGeburtstag = 'cGeburtstag';
	const cWWW = 'cWWW';
	const cSperre = 'cSperre';
	const cPostID = 'cPostID';
	const kKundenGruppe = 'kKundenGruppe';
	const nDrittland = 'nDrittland';
	const nZahlungsziel = 'nZahlungsziel';
	const kSprache = 'kSprache';
	const cISO = 'cISO';
	const cBundesland = 'cBundesland';
	const cHerkunft = 'cHerkunft';
	const cKassenKunde = 'cKassenKunde';
	const cStatus = 'cStatus';
	const cHRNr = 'cHRNr';
	const kZahlungsart = 'kZahlungsart';
	const nDebitorennr = 'nDebitorennr';
	const cSteuerNr = 'cSteuerNr';
	const nKreditlimit = 'nKreditlimit';
	const kKundenDrucktext = 'kKundenDrucktext';
	const nMahnstopp = 'nMahnstopp';
	const nMahnrhythmus = 'nMahnrhythmus';
	const COLUMN_NAMES = [
		'kKunde',
		'kInetKunde',
		'kKundenKategorie',
		'cKundenNr',
		'cFirma',
		'cAnrede',
		'cTitel',
		'cVorname',
		'cName',
		'cStrasse',
		'cPLZ',
		'cOrt',
		'cLand',
		'cTel',
		'cFax',
		'cEMail',
		'cAnmerkung',
		'dErstellt',
		'cAktiv',
		'cMobil',
		'cHaendler',
		'fRabatt',
		'cUSTID',
		'cNewsletter',
		'cZusatz',
		'cZHaenden',
		'cEbayName',
		'kBuyer',
		'cAdressZusatz',
		'cGeburtstag',
		'cWWW',
		'cSperre',
		'cPostID',
		'kKundenGruppe',
		'nDrittland',
		'nZahlungsziel',
		'kSprache',
		'cISO',
		'cBundesland',
		'cHerkunft',
		'cKassenKunde',
		'cStatus',
		'cHRNr',
		'kZahlungsart',
		'nDebitorennr',
		'cSteuerNr',
		'nKreditlimit',
		'kKundenDrucktext',
		'nMahnstopp',
		'nMahnrhythmus',
	];
	const COLUMN_TYPES = [
		'kKunde' => 'int',
		'kInetKunde' => 'int',
		'kKundenKategorie' => 'int',
		'cKundenNr' => 'varchar',
		'cFirma' => 'varchar',
		'cAnrede' => 'varchar',
		'cTitel' => 'varchar',
		'cVorname' => 'varchar',
		'cName' => 'varchar',
		'cStrasse' => 'varchar',
		'cPLZ' => 'varchar',
		'cOrt' => 'varchar',
		'cLand' => 'varchar',
		'cTel' => 'varchar',
		'cFax' => 'varchar',
		'cEMail' => 'varchar',
		'cAnmerkung' => 'varchar',
		'dErstellt' => 'datetime',
		'cAktiv' => 'char',
		'cMobil' => 'varchar',
		'cHaendler' => 'char',
		'fRabatt' => 'decimal',
		'cUSTID' => 'varchar',
		'cNewsletter' => 'char',
		'cZusatz' => 'varchar',
		'cZHaenden' => 'varchar',
		'cEbayName' => 'varchar',
		'kBuyer' => 'int',
		'cAdressZusatz' => 'varchar',
		'cGeburtstag' => 'varchar',
		'cWWW' => 'varchar',
		'cSperre' => 'char',
		'cPostID' => 'varchar',
		'kKundenGruppe' => 'int',
		'nDrittland' => 'tinyint',
		'nZahlungsziel' => 'int',
		'kSprache' => 'int',
		'cISO' => 'varchar',
		'cBundesland' => 'varchar',
		'cHerkunft' => 'varchar',
		'cKassenKunde' => 'char',
		'cStatus' => 'varchar',
		'cHRNr' => 'varchar',
		'kZahlungsart' => 'int',
		'nDebitorennr' => 'int',
		'cSteuerNr' => 'varchar',
		'nKreditlimit' => 'int',
		'kKundenDrucktext' => 'int',
		'nMahnstopp' => 'tinyint',
		'nMahnrhythmus' => 'int',
	];

	/** @var int kKunde */
	public $kKunde;

	/** @var int kInetKunde */
	public $kInetKunde;

	/** @var int kKundenKategorie */
	public $kKundenKategorie;

	/** @var string cKundenNr */
	public $cKundenNr;

	/** @var string cFirma */
	public $cFirma;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var string cTitel */
	public $cTitel;

	/** @var string cVorname */
	public $cVorname;

	/** @var string cName */
	public $cName;

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

	/** @var string cAnmerkung */
	public $cAnmerkung;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cAktiv */
	public $cAktiv;

	/** @var string cMobil */
	public $cMobil;

	/** @var string cHaendler */
	public $cHaendler;

	/** @var string fRabatt */
	public $fRabatt;

	/** @var string cUSTID */
	public $cUSTID;

	/** @var string cNewsletter */
	public $cNewsletter;

	/** @var string cZusatz */
	public $cZusatz;

	/** @var string cZHaenden */
	public $cZHaenden;

	/** @var string cEbayName */
	public $cEbayName;

	/** @var int kBuyer */
	public $kBuyer;

	/** @var string cAdressZusatz */
	public $cAdressZusatz;

	/** @var string cGeburtstag */
	public $cGeburtstag;

	/** @var string cWWW */
	public $cWWW;

	/** @var string cSperre */
	public $cSperre;

	/** @var string cPostID */
	public $cPostID;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int nDrittland */
	public $nDrittland;

	/** @var int nZahlungsziel */
	public $nZahlungsziel;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cISO */
	public $cISO;

	/** @var string cBundesland */
	public $cBundesland;

	/** @var string cHerkunft */
	public $cHerkunft;

	/** @var string cKassenKunde */
	public $cKassenKunde;

	/** @var string cStatus */
	public $cStatus;

	/** @var string cHRNr */
	public $cHRNr;

	/** @var int kZahlungsart */
	public $kZahlungsart;

	/** @var int nDebitorennr */
	public $nDebitorennr;

	/** @var string cSteuerNr */
	public $cSteuerNr;

	/** @var int nKreditlimit */
	public $nKreditlimit;

	/** @var int kKundenDrucktext */
	public $kKundenDrucktext;

	/** @var int nMahnstopp */
	public $nMahnstopp;

	/** @var int nMahnrhythmus */
	public $nMahnrhythmus;
}
