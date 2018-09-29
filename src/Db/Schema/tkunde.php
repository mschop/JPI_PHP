<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kInetKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundenKategorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKundenNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cFirma' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 128,
			'characterSetName' => 'iso_1',
		],
		'cAnrede' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cTitel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
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
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 126,
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
			'characterMaximumLength' => 24,
			'characterSetName' => 'iso_1',
		],
		'cOrt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cLand' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cTel' => [
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
		'cMobil' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cHaendler' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'fRabatt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cUSTID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cNewsletter' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cZusatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 60,
			'characterSetName' => 'iso_1',
		],
		'cZHaenden' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 60,
			'characterSetName' => 'iso_1',
		],
		'cEbayName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kBuyer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAdressZusatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cGeburtstag' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
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
		'cSperre' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cPostID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kKundenGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDrittland' => [
			'type' => 'tinyint',
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
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
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
		'cHerkunft' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKassenKunde' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cStatus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cHRNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kZahlungsart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDebitorennr' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSteuerNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nKreditlimit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundenDrucktext' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMahnstopp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMahnrhythmus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
