<?php

namespace App\Db\Schema;

class pf_user
{
	const TABLE_NAME = 'pf_user';
	const kUser = 'kUser';
	const kFirma = 'kFirma';
	const cAuthToken = 'cAuthToken';
	const cId1 = 'cId1';
	const cId2 = 'cId2';
	const cId3 = 'cId3';
	const cName = 'cName';
	const nPlattform = 'nPlattform';
	const nAktiv = 'nAktiv';
	const kSprache = 'kSprache';
	const kBenutzer = 'kBenutzer';
	const nZahlung = 'nZahlung';
	const cVersandName = 'cVersandName';
	const nBenutzePosName = 'nBenutzePosName';
	const dInventardaten = 'dInventardaten';
	const dInventardatenFBA = 'dInventardatenFBA';
	const nVersandpos0 = 'nVersandpos0';
	const nAnmerkung = 'nAnmerkung';
	const cAnmerkung = 'cAnmerkung';
	const nLagerSenden = 'nLagerSenden';
	const nRepricing = 'nRepricing';
	const dRepricingFull = 'dRepricingFull';
	const nEU = 'nEU';
	const nFBALagerAbziehen = 'nFBALagerAbziehen';
	const kVersandartStandard = 'kVersandartStandard';
	const kVersandartExpedited = 'kVersandartExpedited';
	const nFBAVersandmailAnKunde = 'nFBAVersandmailAnKunde';
	const cFBAVersandmailKopie = 'cFBAVersandmailKopie';
	const nIgnorierePaymentsBestellungen = 'nIgnorierePaymentsBestellungen';
	const cFBAKommentar = 'cFBAKommentar';
	const kZahlungsart = 'kZahlungsart';
	const cAmazonAuthToken = 'cAmazonAuthToken';
	const kVersandartNextDayNonPrime = 'kVersandartNextDayNonPrime';
	const kVersandartSecondDayNonPrime = 'kVersandartSecondDayNonPrime';
	const kVersandartPrimeStandard = 'kVersandartPrimeStandard';
	const kKundengruppe = 'kKundengruppe';
	const nBearbeitungszeitAnpassen = 'nBearbeitungszeitAnpassen';
	const nInventardatenAnfordern = 'nInventardatenAnfordern';
	const nBearbeitungszeitAufschlag = 'nBearbeitungszeitAufschlag';
	const dStartVCS = 'dStartVCS';
	const COLUMN_NAMES = [
		'kUser',
		'kFirma',
		'cAuthToken',
		'cId1',
		'cId2',
		'cId3',
		'cName',
		'nPlattform',
		'nAktiv',
		'kSprache',
		'kBenutzer',
		'nZahlung',
		'cVersandName',
		'nBenutzePosName',
		'dInventardaten',
		'dInventardatenFBA',
		'nVersandpos0',
		'nAnmerkung',
		'cAnmerkung',
		'nLagerSenden',
		'nRepricing',
		'dRepricingFull',
		'nEU',
		'nFBALagerAbziehen',
		'kVersandartStandard',
		'kVersandartExpedited',
		'nFBAVersandmailAnKunde',
		'cFBAVersandmailKopie',
		'nIgnorierePaymentsBestellungen',
		'cFBAKommentar',
		'kZahlungsart',
		'cAmazonAuthToken',
		'kVersandartNextDayNonPrime',
		'kVersandartSecondDayNonPrime',
		'kVersandartPrimeStandard',
		'kKundengruppe',
		'nBearbeitungszeitAnpassen',
		'nInventardatenAnfordern',
		'nBearbeitungszeitAufschlag',
		'dStartVCS',
	];
	const COLUMN_DEFINITIONS = [
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAuthToken' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cId1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cId2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cId3' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAktiv' => [
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
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nZahlung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVersandName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nBenutzePosName' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dInventardaten' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dInventardatenFBA' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVersandpos0' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnmerkung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAnmerkung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nLagerSenden' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nRepricing' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dRepricingFull' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEU' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nFBALagerAbziehen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersandartStandard' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersandartExpedited' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nFBAVersandmailAnKunde' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFBAVersandmailKopie' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'nIgnorierePaymentsBestellungen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFBAKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'kZahlungsart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAmazonAuthToken' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kVersandartNextDayNonPrime' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersandartSecondDayNonPrime' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersandartPrimeStandard' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundengruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nBearbeitungszeitAnpassen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nInventardatenAnfordern' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nBearbeitungszeitAufschlag' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dStartVCS' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kUser */
	public $kUser;

	/** @var int kFirma */
	public $kFirma;

	/** @var string cAuthToken */
	public $cAuthToken;

	/** @var string cId1 */
	public $cId1;

	/** @var string cId2 */
	public $cId2;

	/** @var string cId3 */
	public $cId3;

	/** @var string cName */
	public $cName;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var int kSprache */
	public $kSprache;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nZahlung */
	public $nZahlung;

	/** @var string cVersandName */
	public $cVersandName;

	/** @var int nBenutzePosName */
	public $nBenutzePosName;

	/** @var string dInventardaten */
	public $dInventardaten;

	/** @var string dInventardatenFBA */
	public $dInventardatenFBA;

	/** @var int nVersandpos0 */
	public $nVersandpos0;

	/** @var int nAnmerkung */
	public $nAnmerkung;

	/** @var string cAnmerkung */
	public $cAnmerkung;

	/** @var int nLagerSenden */
	public $nLagerSenden;

	/** @var int nRepricing */
	public $nRepricing;

	/** @var string dRepricingFull */
	public $dRepricingFull;

	/** @var int nEU */
	public $nEU;

	/** @var int nFBALagerAbziehen */
	public $nFBALagerAbziehen;

	/** @var int kVersandartStandard */
	public $kVersandartStandard;

	/** @var int kVersandartExpedited */
	public $kVersandartExpedited;

	/** @var int nFBAVersandmailAnKunde */
	public $nFBAVersandmailAnKunde;

	/** @var string cFBAVersandmailKopie */
	public $cFBAVersandmailKopie;

	/** @var int nIgnorierePaymentsBestellungen */
	public $nIgnorierePaymentsBestellungen;

	/** @var string cFBAKommentar */
	public $cFBAKommentar;

	/** @var int kZahlungsart */
	public $kZahlungsart;

	/** @var string cAmazonAuthToken */
	public $cAmazonAuthToken;

	/** @var int kVersandartNextDayNonPrime */
	public $kVersandartNextDayNonPrime;

	/** @var int kVersandartSecondDayNonPrime */
	public $kVersandartSecondDayNonPrime;

	/** @var int kVersandartPrimeStandard */
	public $kVersandartPrimeStandard;

	/** @var int kKundengruppe */
	public $kKundengruppe;

	/** @var int nBearbeitungszeitAnpassen */
	public $nBearbeitungszeitAnpassen;

	/** @var int nInventardatenAnfordern */
	public $nInventardatenAnfordern;

	/** @var int nBearbeitungszeitAufschlag */
	public $nBearbeitungszeitAufschlag;

	/** @var string dStartVCS */
	public $dStartVCS;
}
