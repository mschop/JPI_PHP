<?php

namespace App\Schema;

class tLieferantenBestellungLA
{
	const TABLE_NAME = 'tLieferantenBestellungLA';
	const kLieferantenBestellungLA = 'kLieferantenBestellungLA';
	const cKundennummer = 'cKundennummer';
	const cFirma = 'cFirma';
	const cFirmenZusatz = 'cFirmenZusatz';
	const cAnrede = 'cAnrede';
	const cTitel = 'cTitel';
	const cVorname = 'cVorname';
	const cNachname = 'cNachname';
	const cStrasse = 'cStrasse';
	const cAdresszusatz = 'cAdresszusatz';
	const cPLZ = 'cPLZ';
	const cOrt = 'cOrt';
	const cBundesland = 'cBundesland';
	const cLandISO = 'cLandISO';
	const cTel = 'cTel';
	const cFax = 'cFax';
	const cMobil = 'cMobil';
	const cMail = 'cMail';
	const COLUMN_NAMES = [
		'kLieferantenBestellungLA',
		'cKundennummer',
		'cFirma',
		'cFirmenZusatz',
		'cAnrede',
		'cTitel',
		'cVorname',
		'cNachname',
		'cStrasse',
		'cAdresszusatz',
		'cPLZ',
		'cOrt',
		'cBundesland',
		'cLandISO',
		'cTel',
		'cFax',
		'cMobil',
		'cMail',
	];
	const COLUMN_TYPES = [
		'kLieferantenBestellungLA' => 'int',
		'cKundennummer' => 'varchar',
		'cFirma' => 'varchar',
		'cFirmenZusatz' => 'varchar',
		'cAnrede' => 'varchar',
		'cTitel' => 'varchar',
		'cVorname' => 'varchar',
		'cNachname' => 'varchar',
		'cStrasse' => 'varchar',
		'cAdresszusatz' => 'varchar',
		'cPLZ' => 'varchar',
		'cOrt' => 'varchar',
		'cBundesland' => 'varchar',
		'cLandISO' => 'varchar',
		'cTel' => 'varchar',
		'cFax' => 'varchar',
		'cMobil' => 'varchar',
		'cMail' => 'varchar',
	];

	/** @var int kLieferantenBestellungLA */
	public $kLieferantenBestellungLA;

	/** @var string cKundennummer */
	public $cKundennummer;

	/** @var string cFirma */
	public $cFirma;

	/** @var string cFirmenZusatz */
	public $cFirmenZusatz;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var string cTitel */
	public $cTitel;

	/** @var string cVorname */
	public $cVorname;

	/** @var string cNachname */
	public $cNachname;

	/** @var string cStrasse */
	public $cStrasse;

	/** @var string cAdresszusatz */
	public $cAdresszusatz;

	/** @var string cPLZ */
	public $cPLZ;

	/** @var string cOrt */
	public $cOrt;

	/** @var string cBundesland */
	public $cBundesland;

	/** @var string cLandISO */
	public $cLandISO;

	/** @var string cTel */
	public $cTel;

	/** @var string cFax */
	public $cFax;

	/** @var string cMobil */
	public $cMobil;

	/** @var string cMail */
	public $cMail;
}
