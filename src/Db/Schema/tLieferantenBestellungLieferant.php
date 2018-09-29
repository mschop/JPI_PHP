<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kLieferantenBestellungLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFirma' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cFirmenZusatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
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
		'cAdresszusatz' => [
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
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cOrt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
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
		'cLandISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'cTel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cFax' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cMobil' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
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
		'cAnsprechpartnerAnrede' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAnsprechpartnerVorname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAnsprechpartnerName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
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
