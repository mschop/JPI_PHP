<?php

namespace App\Db\Schema;

class tFulfillmentAuftrag
{
	const TABLE_NAME = 'tFulfillmentAuftrag';
	const kFulfillmentAuftrag = 'kFulfillmentAuftrag';
	const kLieferschein = 'kLieferschein';
	const kKunde = 'kKunde';
	const kLieferadresse = 'kLieferadresse';
	const kWarenlager = 'kWarenlager';
	const kUser = 'kUser';
	const kBenutzer = 'kBenutzer';
	const kSprache = 'kSprache';
	const nFulfillmentDienstleister = 'nFulfillmentDienstleister';
	const nStatus = 'nStatus';
	const cBestellnummer = 'cBestellnummer';
	const cLieferscheinnummer = 'cLieferscheinnummer';
	const cKommentar = 'cKommentar';
	const cLieferAdresseKundennummer = 'cLieferAdresseKundennummer';
	const cLieferAdresseFirma = 'cLieferAdresseFirma';
	const cLieferAdresseAnrede = 'cLieferAdresseAnrede';
	const cLieferAdresseTitel = 'cLieferAdresseTitel';
	const cLieferAdresseVorname = 'cLieferAdresseVorname';
	const cLieferAdresseName = 'cLieferAdresseName';
	const cLieferAdresseStrasse = 'cLieferAdresseStrasse';
	const cLieferAdressePLZ = 'cLieferAdressePLZ';
	const cLieferAdresseOrt = 'cLieferAdresseOrt';
	const cLieferAdresseLand = 'cLieferAdresseLand';
	const cLieferAdresseTel = 'cLieferAdresseTel';
	const cLieferAdresseFax = 'cLieferAdresseFax';
	const cLieferAdresseEmail = 'cLieferAdresseEmail';
	const dErstellt = 'dErstellt';
	const dGedruckt = 'dGedruckt';
	const dGemailt = 'dGemailt';
	const dGefaxt = 'dGefaxt';
	const dApiVersendet = 'dApiVersendet';
	const dInBearbeitung = 'dInBearbeitung';
	const cLieferPrioritaet = 'cLieferPrioritaet';
	const dBestelldatum = 'dBestelldatum';
	const cLieferAdressZusatz = 'cLieferAdressZusatz';
	const cLieferZusatz = 'cLieferZusatz';
	const cFehlermeldung = 'cFehlermeldung';
	const cLieferadresseBundesland = 'cLieferadresseBundesland';
	const COLUMN_NAMES = [
		'kFulfillmentAuftrag',
		'kLieferschein',
		'kKunde',
		'kLieferadresse',
		'kWarenlager',
		'kUser',
		'kBenutzer',
		'kSprache',
		'nFulfillmentDienstleister',
		'nStatus',
		'cBestellnummer',
		'cLieferscheinnummer',
		'cKommentar',
		'cLieferAdresseKundennummer',
		'cLieferAdresseFirma',
		'cLieferAdresseAnrede',
		'cLieferAdresseTitel',
		'cLieferAdresseVorname',
		'cLieferAdresseName',
		'cLieferAdresseStrasse',
		'cLieferAdressePLZ',
		'cLieferAdresseOrt',
		'cLieferAdresseLand',
		'cLieferAdresseTel',
		'cLieferAdresseFax',
		'cLieferAdresseEmail',
		'dErstellt',
		'dGedruckt',
		'dGemailt',
		'dGefaxt',
		'dApiVersendet',
		'dInBearbeitung',
		'cLieferPrioritaet',
		'dBestelldatum',
		'cLieferAdressZusatz',
		'cLieferZusatz',
		'cFehlermeldung',
		'cLieferadresseBundesland',
	];
	const COLUMN_DEFINITIONS = [
		'kFulfillmentAuftrag' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferschein' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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
		'kLieferadresse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
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
		'nFulfillmentDienstleister' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBestellnummer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cLieferscheinnummer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdresseKundennummer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdresseFirma' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 128,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdresseAnrede' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdresseTitel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdresseVorname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 126,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdresseName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 126,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdresseStrasse' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdressePLZ' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 24,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdresseOrt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdresseLand' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdresseTel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdresseFax' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdresseEmail' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
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
		'dGedruckt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dGemailt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dGefaxt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dApiVersendet' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dInBearbeitung' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLieferPrioritaet' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'dBestelldatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLieferAdressZusatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferZusatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 60,
			'characterSetName' => 'iso_1',
		],
		'cFehlermeldung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferadresseBundesland' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kFulfillmentAuftrag */
	public $kFulfillmentAuftrag;

	/** @var int kLieferschein */
	public $kLieferschein;

	/** @var int kKunde */
	public $kKunde;

	/** @var int kLieferadresse */
	public $kLieferadresse;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int kUser */
	public $kUser;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kSprache */
	public $kSprache;

	/** @var int nFulfillmentDienstleister */
	public $nFulfillmentDienstleister;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cBestellnummer */
	public $cBestellnummer;

	/** @var string cLieferscheinnummer */
	public $cLieferscheinnummer;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var string cLieferAdresseKundennummer */
	public $cLieferAdresseKundennummer;

	/** @var string cLieferAdresseFirma */
	public $cLieferAdresseFirma;

	/** @var string cLieferAdresseAnrede */
	public $cLieferAdresseAnrede;

	/** @var string cLieferAdresseTitel */
	public $cLieferAdresseTitel;

	/** @var string cLieferAdresseVorname */
	public $cLieferAdresseVorname;

	/** @var string cLieferAdresseName */
	public $cLieferAdresseName;

	/** @var string cLieferAdresseStrasse */
	public $cLieferAdresseStrasse;

	/** @var string cLieferAdressePLZ */
	public $cLieferAdressePLZ;

	/** @var string cLieferAdresseOrt */
	public $cLieferAdresseOrt;

	/** @var string cLieferAdresseLand */
	public $cLieferAdresseLand;

	/** @var string cLieferAdresseTel */
	public $cLieferAdresseTel;

	/** @var string cLieferAdresseFax */
	public $cLieferAdresseFax;

	/** @var string cLieferAdresseEmail */
	public $cLieferAdresseEmail;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dGedruckt */
	public $dGedruckt;

	/** @var string dGemailt */
	public $dGemailt;

	/** @var string dGefaxt */
	public $dGefaxt;

	/** @var string dApiVersendet */
	public $dApiVersendet;

	/** @var string dInBearbeitung */
	public $dInBearbeitung;

	/** @var string cLieferPrioritaet */
	public $cLieferPrioritaet;

	/** @var string dBestelldatum */
	public $dBestelldatum;

	/** @var string cLieferAdressZusatz */
	public $cLieferAdressZusatz;

	/** @var string cLieferZusatz */
	public $cLieferZusatz;

	/** @var string cFehlermeldung */
	public $cFehlermeldung;

	/** @var string cLieferadresseBundesland */
	public $cLieferadresseBundesland;
}
