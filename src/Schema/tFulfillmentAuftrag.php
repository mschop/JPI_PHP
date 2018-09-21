<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kFulfillmentAuftrag' => 'int',
		'kLieferschein' => 'int',
		'kKunde' => 'int',
		'kLieferadresse' => 'int',
		'kWarenlager' => 'int',
		'kUser' => 'int',
		'kBenutzer' => 'int',
		'kSprache' => 'int',
		'nFulfillmentDienstleister' => 'int',
		'nStatus' => 'int',
		'cBestellnummer' => 'varchar',
		'cLieferscheinnummer' => 'varchar',
		'cKommentar' => 'varchar',
		'cLieferAdresseKundennummer' => 'varchar',
		'cLieferAdresseFirma' => 'varchar',
		'cLieferAdresseAnrede' => 'varchar',
		'cLieferAdresseTitel' => 'varchar',
		'cLieferAdresseVorname' => 'varchar',
		'cLieferAdresseName' => 'varchar',
		'cLieferAdresseStrasse' => 'varchar',
		'cLieferAdressePLZ' => 'varchar',
		'cLieferAdresseOrt' => 'varchar',
		'cLieferAdresseLand' => 'varchar',
		'cLieferAdresseTel' => 'varchar',
		'cLieferAdresseFax' => 'varchar',
		'cLieferAdresseEmail' => 'varchar',
		'dErstellt' => 'datetime',
		'dGedruckt' => 'datetime',
		'dGemailt' => 'datetime',
		'dGefaxt' => 'datetime',
		'dApiVersendet' => 'datetime',
		'dInBearbeitung' => 'datetime',
		'cLieferPrioritaet' => 'varchar',
		'dBestelldatum' => 'datetime',
		'cLieferAdressZusatz' => 'varchar',
		'cLieferZusatz' => 'varchar',
		'cFehlermeldung' => 'varchar',
		'cLieferadresseBundesland' => 'varchar',
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
