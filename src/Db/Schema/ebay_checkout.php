<?php

namespace App\Db\Schema;

class ebay_checkout
{
	const TABLE_NAME = 'ebay_checkout';
	const kEbayCheckout = 'kEbayCheckout';
	const kEbayBuyer = 'kEbayBuyer';
	const kEbayUser = 'kEbayUser';
	const cVerwendungszweck = 'cVerwendungszweck';
	const cLieferAnrede = 'cLieferAnrede';
	const cLieferVorname = 'cLieferVorname';
	const cLieferNachname = 'cLieferNachname';
	const cLieferNamenszusatz = 'cLieferNamenszusatz';
	const cLieferStrasse = 'cLieferStrasse';
	const cLieferAdresszusatz = 'cLieferAdresszusatz';
	const cLieferPLZ = 'cLieferPLZ';
	const cLieferOrt = 'cLieferOrt';
	const cLieferOrtszusatz = 'cLieferOrtszusatz';
	const cLieferLand = 'cLieferLand';
	const cLieferTel = 'cLieferTel';
	const cLieferFax = 'cLieferFax';
	const cLieferHandy = 'cLieferHandy';
	const cZahlungsart = 'cZahlungsart';
	const cZahlungBankName = 'cZahlungBankName';
	const cZahlungBLZ = 'cZahlungBLZ';
	const cZahlungKontoNr = 'cZahlungKontoNr';
	const cZahlungKartenNr = 'cZahlungKartenNr';
	const cZahlungGueltigkeit = 'cZahlungGueltigkeit';
	const cZahlungCVV = 'cZahlungCVV';
	const cZahlungKartenTyp = 'cZahlungKartenTyp';
	const cZahlungInhaber = 'cZahlungInhaber';
	const fVersandkosten = 'fVersandkosten';
	const dErstelltAm = 'dErstelltAm';
	const dAbgeschlossenAm = 'dAbgeschlossenAm';
	const nStatus = 'nStatus';
	const nAnzahlPos = 'nAnzahlPos';
	const fSumme = 'fSumme';
	const cVersandArt = 'cVersandArt';
	const cTel = 'cTel';
	const cFax = 'cFax';
	const cMobil = 'cMobil';
	const cEMail = 'cEMail';
	const cComment = 'cComment';
	const cFirma = 'cFirma';
	const cLieferFirma = 'cLieferFirma';
	const cUStID = 'cUStID';
	const cAdresszusatz = 'cAdresszusatz';
	const cAnrede = 'cAnrede';
	const cVorname = 'cVorname';
	const cNachname = 'cNachname';
	const nCheckoutType = 'nCheckoutType';
	const cPaymentStatus = 'cPaymentStatus';
	const cPLZ = 'cPLZ';
	const cOrt = 'cOrt';
	const cLand = 'cLand';
	const nNeu = 'nNeu';
	const cStrasse = 'cStrasse';
	const cPaypalTransactionID = 'cPaypalTransactionID';
	const cPUIZahlungsdaten = 'cPUIZahlungsdaten';
	const nInBearbeitung = 'nInBearbeitung';
	const COLUMN_NAMES = [
		'kEbayCheckout',
		'kEbayBuyer',
		'kEbayUser',
		'cVerwendungszweck',
		'cLieferAnrede',
		'cLieferVorname',
		'cLieferNachname',
		'cLieferNamenszusatz',
		'cLieferStrasse',
		'cLieferAdresszusatz',
		'cLieferPLZ',
		'cLieferOrt',
		'cLieferOrtszusatz',
		'cLieferLand',
		'cLieferTel',
		'cLieferFax',
		'cLieferHandy',
		'cZahlungsart',
		'cZahlungBankName',
		'cZahlungBLZ',
		'cZahlungKontoNr',
		'cZahlungKartenNr',
		'cZahlungGueltigkeit',
		'cZahlungCVV',
		'cZahlungKartenTyp',
		'cZahlungInhaber',
		'fVersandkosten',
		'dErstelltAm',
		'dAbgeschlossenAm',
		'nStatus',
		'nAnzahlPos',
		'fSumme',
		'cVersandArt',
		'cTel',
		'cFax',
		'cMobil',
		'cEMail',
		'cComment',
		'cFirma',
		'cLieferFirma',
		'cUStID',
		'cAdresszusatz',
		'cAnrede',
		'cVorname',
		'cNachname',
		'nCheckoutType',
		'cPaymentStatus',
		'cPLZ',
		'cOrt',
		'cLand',
		'nNeu',
		'cStrasse',
		'cPaypalTransactionID',
		'cPUIZahlungsdaten',
		'nInBearbeitung',
	];
	const COLUMN_DEFINITIONS = [
		'kEbayCheckout' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayBuyer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVerwendungszweck' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cLieferAnrede' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cLieferVorname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferNachname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferNamenszusatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferStrasse' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferAdresszusatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferPLZ' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferOrt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferOrtszusatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferLand' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferTel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferFax' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferHandy' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cZahlungsart' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cZahlungBankName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cZahlungBLZ' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cZahlungKontoNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cZahlungKartenNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cZahlungGueltigkeit' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 12,
			'characterSetName' => 'iso_1',
		],
		'cZahlungCVV' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4,
			'characterSetName' => 'iso_1',
		],
		'cZahlungKartenTyp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cZahlungInhaber' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fVersandkosten' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstelltAm' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAbgeschlossenAm' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlPos' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fSumme' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVersandArt' => [
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
		'cEMail' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cComment' => [
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
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferFirma' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cUStID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
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
			'characterMaximumLength' => 126,
			'characterSetName' => 'iso_1',
		],
		'cNachname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 126,
			'characterSetName' => 'iso_1',
		],
		'nCheckoutType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPaymentStatus' => [
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
		'cLand' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nNeu' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cStrasse' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cPaypalTransactionID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cPUIZahlungsdaten' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'nInBearbeitung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEbayCheckout */
	public $kEbayCheckout;

	/** @var int kEbayBuyer */
	public $kEbayBuyer;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var string cVerwendungszweck */
	public $cVerwendungszweck;

	/** @var string cLieferAnrede */
	public $cLieferAnrede;

	/** @var string cLieferVorname */
	public $cLieferVorname;

	/** @var string cLieferNachname */
	public $cLieferNachname;

	/** @var string cLieferNamenszusatz */
	public $cLieferNamenszusatz;

	/** @var string cLieferStrasse */
	public $cLieferStrasse;

	/** @var string cLieferAdresszusatz */
	public $cLieferAdresszusatz;

	/** @var string cLieferPLZ */
	public $cLieferPLZ;

	/** @var string cLieferOrt */
	public $cLieferOrt;

	/** @var string cLieferOrtszusatz */
	public $cLieferOrtszusatz;

	/** @var string cLieferLand */
	public $cLieferLand;

	/** @var string cLieferTel */
	public $cLieferTel;

	/** @var string cLieferFax */
	public $cLieferFax;

	/** @var string cLieferHandy */
	public $cLieferHandy;

	/** @var string cZahlungsart */
	public $cZahlungsart;

	/** @var string cZahlungBankName */
	public $cZahlungBankName;

	/** @var string cZahlungBLZ */
	public $cZahlungBLZ;

	/** @var string cZahlungKontoNr */
	public $cZahlungKontoNr;

	/** @var string cZahlungKartenNr */
	public $cZahlungKartenNr;

	/** @var string cZahlungGueltigkeit */
	public $cZahlungGueltigkeit;

	/** @var string cZahlungCVV */
	public $cZahlungCVV;

	/** @var string cZahlungKartenTyp */
	public $cZahlungKartenTyp;

	/** @var string cZahlungInhaber */
	public $cZahlungInhaber;

	/** @var string fVersandkosten */
	public $fVersandkosten;

	/** @var string dErstelltAm */
	public $dErstelltAm;

	/** @var string dAbgeschlossenAm */
	public $dAbgeschlossenAm;

	/** @var int nStatus */
	public $nStatus;

	/** @var int nAnzahlPos */
	public $nAnzahlPos;

	/** @var string fSumme */
	public $fSumme;

	/** @var string cVersandArt */
	public $cVersandArt;

	/** @var string cTel */
	public $cTel;

	/** @var string cFax */
	public $cFax;

	/** @var string cMobil */
	public $cMobil;

	/** @var string cEMail */
	public $cEMail;

	/** @var string cComment */
	public $cComment;

	/** @var string cFirma */
	public $cFirma;

	/** @var string cLieferFirma */
	public $cLieferFirma;

	/** @var string cUStID */
	public $cUStID;

	/** @var string cAdresszusatz */
	public $cAdresszusatz;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var string cVorname */
	public $cVorname;

	/** @var string cNachname */
	public $cNachname;

	/** @var int nCheckoutType */
	public $nCheckoutType;

	/** @var string cPaymentStatus */
	public $cPaymentStatus;

	/** @var string cPLZ */
	public $cPLZ;

	/** @var string cOrt */
	public $cOrt;

	/** @var string cLand */
	public $cLand;

	/** @var int nNeu */
	public $nNeu;

	/** @var string cStrasse */
	public $cStrasse;

	/** @var string cPaypalTransactionID */
	public $cPaypalTransactionID;

	/** @var string cPUIZahlungsdaten */
	public $cPUIZahlungsdaten;

	/** @var int nInBearbeitung */
	public $nInBearbeitung;
}
