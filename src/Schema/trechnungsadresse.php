<?php

namespace App\Schema;

class trechnungsadresse
{
	const TABLE_NAME = 'trechnungsadresse';
	const kRechnungsAdresse = 'kRechnungsAdresse';
	const kKunde = 'kKunde';
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
	const cZusatz = 'cZusatz';
	const cAdressZusatz = 'cAdressZusatz';
	const cPostID = 'cPostID';
	const cMobil = 'cMobil';
	const cMail = 'cMail';
	const cFax = 'cFax';
	const cBundesland = 'cBundesland';
	const cISO = 'cISO';
	const cKundenNr = 'cKundenNr';
	const cZHaenden = 'cZHaenden';
	const COLUMN_NAMES = [
		'kRechnungsAdresse',
		'kKunde',
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
		'cZusatz',
		'cAdressZusatz',
		'cPostID',
		'cMobil',
		'cMail',
		'cFax',
		'cBundesland',
		'cISO',
		'cKundenNr',
		'cZHaenden',
	];
	const COLUMN_TYPES = [
		'kRechnungsAdresse' => 'int',
		'kKunde' => 'int',
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
		'cZusatz' => 'varchar',
		'cAdressZusatz' => 'varchar',
		'cPostID' => 'varchar',
		'cMobil' => 'varchar',
		'cMail' => 'varchar',
		'cFax' => 'varchar',
		'cBundesland' => 'varchar',
		'cISO' => 'varchar',
		'cKundenNr' => 'varchar',
		'cZHaenden' => 'varchar',
	];

	/** @var int kRechnungsAdresse */
	public $kRechnungsAdresse;

	/** @var int kKunde */
	public $kKunde;

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

	/** @var string cZusatz */
	public $cZusatz;

	/** @var string cAdressZusatz */
	public $cAdressZusatz;

	/** @var string cPostID */
	public $cPostID;

	/** @var string cMobil */
	public $cMobil;

	/** @var string cMail */
	public $cMail;

	/** @var string cFax */
	public $cFax;

	/** @var string cBundesland */
	public $cBundesland;

	/** @var string cISO */
	public $cISO;

	/** @var string cKundenNr */
	public $cKundenNr;

	/** @var string cZHaenden */
	public $cZHaenden;
}
