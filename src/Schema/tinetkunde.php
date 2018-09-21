<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kInetKunde' => 'int',
		'cKundenNr' => 'varchar',
		'cBenutzername' => 'varchar',
		'cPasswort' => 'varchar',
		'cAnrede' => 'varchar',
		'cVorname' => 'varchar',
		'cNachname' => 'varchar',
		'cFirma' => 'varchar',
		'cStrasse' => 'varchar',
		'cPLZ' => 'varchar',
		'cStadt' => 'varchar',
		'cLand' => 'varchar',
		'cTel' => 'varchar',
		'cFax' => 'varchar',
		'cMail' => 'varchar',
		'cHaendler' => 'char',
		'fRabatt' => 'decimal',
		'cUSTID' => 'varchar',
		'cTitel' => 'varchar',
		'cNewsletter' => 'char',
		'cAdressZusatz' => 'varchar',
		'cGeburtstag' => 'varchar',
		'cWWW' => 'varchar',
		'kShop' => 'int',
		'kKundenGruppe' => 'int',
		'cMobil' => 'varchar',
		'nAktiv' => 'tinyint',
		'kSprache' => 'int',
		'cBundesland' => 'varchar',
		'cHerkunft' => 'varchar',
		'nRegistriert' => 'smallint',
		'cZusatz' => 'varchar',
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
