<?php

namespace App\Schema;

class tLieferantenBestellungLieferant
{
	const TABLE_NAME = 'tLieferantenBestellungLieferant';
	const kLieferantenBestellungLieferant = 'kLieferantenBestellungLieferant';
	const kLieferant = 'kLieferant';
	const cFirma = 'cFirma';
	const cFirmenZusatz = 'cFirmenZusatz';
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
	const cAnsprechpartnerAnrede = 'cAnsprechpartnerAnrede';
	const cAnsprechpartnerVorname = 'cAnsprechpartnerVorname';
	const cAnsprechpartnerName = 'cAnsprechpartnerName';
	const COLUMN_NAMES = [
		'kLieferantenBestellungLieferant',
		'kLieferant',
		'cFirma',
		'cFirmenZusatz',
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
		'cAnsprechpartnerAnrede',
		'cAnsprechpartnerVorname',
		'cAnsprechpartnerName',
	];
	const COLUMN_TYPES = [
		'kLieferantenBestellungLieferant' => 'int',
		'kLieferant' => 'int',
		'cFirma' => 'varchar',
		'cFirmenZusatz' => 'varchar',
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
		'cAnsprechpartnerAnrede' => 'varchar',
		'cAnsprechpartnerVorname' => 'varchar',
		'cAnsprechpartnerName' => 'varchar',
	];

	/** @var int kLieferantenBestellungLieferant */
	public $kLieferantenBestellungLieferant;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string cFirma */
	public $cFirma;

	/** @var string cFirmenZusatz */
	public $cFirmenZusatz;

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

	/** @var string cAnsprechpartnerAnrede */
	public $cAnsprechpartnerAnrede;

	/** @var string cAnsprechpartnerVorname */
	public $cAnsprechpartnerVorname;

	/** @var string cAnsprechpartnerName */
	public $cAnsprechpartnerName;
}
