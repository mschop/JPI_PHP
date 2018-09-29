<?php

namespace App\Db\Schema;

class tinetkunde
{
	const TABLE_NAME = 'tinetkunde';
	const kInetKunde = 'kInetKunde';
	const cKundenNr = 'cKundenNr';
	const cBenutzername = 'cBenutzername';
	const cPasswort = 'cPasswort';
	const cAnrede = 'cAnrede';
	const cVorname = 'cVorname';
	const cNachname = 'cNachname';
	const cFirma = 'cFirma';
	const cStrasse = 'cStrasse';
	const cPLZ = 'cPLZ';
	const cStadt = 'cStadt';
	const cLand = 'cLand';
	const cTel = 'cTel';
	const cFax = 'cFax';
	const cMail = 'cMail';
	const cHaendler = 'cHaendler';
	const fRabatt = 'fRabatt';
	const cUSTID = 'cUSTID';
	const cTitel = 'cTitel';
	const cNewsletter = 'cNewsletter';
	const cAdressZusatz = 'cAdressZusatz';
	const cGeburtstag = 'cGeburtstag';
	const cWWW = 'cWWW';
	const kShop = 'kShop';
	const kKundenGruppe = 'kKundenGruppe';
	const cMobil = 'cMobil';
	const nAktiv = 'nAktiv';
	const kSprache = 'kSprache';
	const cBundesland = 'cBundesland';
	const cHerkunft = 'cHerkunft';
	const nRegistriert = 'nRegistriert';
	const cZusatz = 'cZusatz';
	const COLUMN_NAMES = [
		'kInetKunde',
		'cKundenNr',
		'cBenutzername',
		'cPasswort',
		'cAnrede',
		'cVorname',
		'cNachname',
		'cFirma',
		'cStrasse',
		'cPLZ',
		'cStadt',
		'cLand',
		'cTel',
		'cFax',
		'cMail',
		'cHaendler',
		'fRabatt',
		'cUSTID',
		'cTitel',
		'cNewsletter',
		'cAdressZusatz',
		'cGeburtstag',
		'cWWW',
		'kShop',
		'kKundenGruppe',
		'cMobil',
		'nAktiv',
		'kSprache',
		'cBundesland',
		'cHerkunft',
		'nRegistriert',
		'cZusatz',
	];
	const COLUMN_DEFINITIONS = [
		'kInetKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKundenNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cBenutzername' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cPasswort' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
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
		'cVorname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 128,
			'characterSetName' => 'iso_1',
		],
		'cNachname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 128,
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
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cStadt' => [
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
			'characterMaximumLength' => 45,
			'characterSetName' => 'iso_1',
		],
		'cFax' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 45,
			'characterSetName' => 'iso_1',
		],
		'cMail' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
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
		'cTitel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
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
			'characterMaximumLength' => 32,
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
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundenGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMobil' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'nAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
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
		'nRegistriert' => [
			'type' => 'smallint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cZusatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kInetKunde */
	public $kInetKunde;

	/** @var string cKundenNr */
	public $cKundenNr;

	/** @var string cBenutzername */
	public $cBenutzername;

	/** @var string cPasswort */
	public $cPasswort;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var string cVorname */
	public $cVorname;

	/** @var string cNachname */
	public $cNachname;

	/** @var string cFirma */
	public $cFirma;

	/** @var string cStrasse */
	public $cStrasse;

	/** @var string cPLZ */
	public $cPLZ;

	/** @var string cStadt */
	public $cStadt;

	/** @var string cLand */
	public $cLand;

	/** @var string cTel */
	public $cTel;

	/** @var string cFax */
	public $cFax;

	/** @var string cMail */
	public $cMail;

	/** @var string cHaendler */
	public $cHaendler;

	/** @var string fRabatt */
	public $fRabatt;

	/** @var string cUSTID */
	public $cUSTID;

	/** @var string cTitel */
	public $cTitel;

	/** @var string cNewsletter */
	public $cNewsletter;

	/** @var string cAdressZusatz */
	public $cAdressZusatz;

	/** @var string cGeburtstag */
	public $cGeburtstag;

	/** @var string cWWW */
	public $cWWW;

	/** @var int kShop */
	public $kShop;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var string cMobil */
	public $cMobil;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cBundesland */
	public $cBundesland;

	/** @var string cHerkunft */
	public $cHerkunft;

	/** @var int nRegistriert */
	public $nRegistriert;

	/** @var string cZusatz */
	public $cZusatz;
}
