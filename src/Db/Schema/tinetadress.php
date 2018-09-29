<?php

namespace App\Db\Schema;

class tinetadress
{
	const TABLE_NAME = 'tinetadress';
	const kInetAdress = 'kInetAdress';
	const kKunde = 'kKunde';
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
	const cAnrede = 'cAnrede';
	const cAdressZusatz = 'cAdressZusatz';
	const kShop = 'kShop';
	const cMobil = 'cMobil';
	const cTitel = 'cTitel';
	const cZusatz = 'cZusatz';
	const cBundesland = 'cBundesland';
	const COLUMN_NAMES = [
		'kInetAdress',
		'kKunde',
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
		'cAnrede',
		'cAdressZusatz',
		'kShop',
		'cMobil',
		'cTitel',
		'cZusatz',
		'cBundesland',
	];
	const COLUMN_DEFINITIONS = [
		'kInetAdress' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVorname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cNachname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
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
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLand' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
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
		'cAnrede' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
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
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMobil' => [
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
		'cZusatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 60,
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
	];

	/** @var int kInetAdress */
	public $kInetAdress;

	/** @var int kKunde */
	public $kKunde;

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

	/** @var string cAnrede */
	public $cAnrede;

	/** @var string cAdressZusatz */
	public $cAdressZusatz;

	/** @var int kShop */
	public $kShop;

	/** @var string cMobil */
	public $cMobil;

	/** @var string cTitel */
	public $cTitel;

	/** @var string cZusatz */
	public $cZusatz;

	/** @var string cBundesland */
	public $cBundesland;
}
