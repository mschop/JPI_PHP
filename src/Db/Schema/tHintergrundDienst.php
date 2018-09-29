<?php

namespace App\Db\Schema;

class tHintergrundDienst
{
	const TABLE_NAME = 'tHintergrundDienst';
	const nSek = 'nSek';
	const nKeinShop = 'nKeinShop';
	const nKundenupdate = 'nKundenupdate';
	const nAktiv = 'nAktiv';
	const nReDrucken = 'nReDrucken';
	const nWebshopAuftrag = 'nWebshopAuftrag';
	const nKeinEbay = 'nKeinEbay';
	const nEbaySmall = 'nEbaySmall';
	const nEbayAuftrag = 'nEbayAuftrag';
	const nKeinAmazon = 'nKeinAmazon';
	const nAmazonAuftrag = 'nAmazonAuftrag';
	const nEbayBestand = 'nEbayBestand';
	const nWaehrung = 'nWaehrung';
	const nRepricer = 'nRepricer';
	const nRetourenErstellen = 'nRetourenErstellen';
	const nUpdateBilderBeschreibung = 'nUpdateBilderBeschreibung';
	const nKeinFulfillment = 'nKeinFulfillment';
	const nKeinZahlungsabgleich = 'nKeinZahlungsabgleich';
	const COLUMN_NAMES = [
		'nSek',
		'nKeinShop',
		'nKundenupdate',
		'nAktiv',
		'nReDrucken',
		'nWebshopAuftrag',
		'nKeinEbay',
		'nEbaySmall',
		'nEbayAuftrag',
		'nKeinAmazon',
		'nAmazonAuftrag',
		'nEbayBestand',
		'nWaehrung',
		'nRepricer',
		'nRetourenErstellen',
		'nUpdateBilderBeschreibung',
		'nKeinFulfillment',
		'nKeinZahlungsabgleich',
	];
	const COLUMN_DEFINITIONS = [
		'nSek' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKeinShop' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKundenupdate' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nReDrucken' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nWebshopAuftrag' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKeinEbay' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEbaySmall' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEbayAuftrag' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKeinAmazon' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAmazonAuftrag' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEbayBestand' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nWaehrung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nRepricer' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nRetourenErstellen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nUpdateBilderBeschreibung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKeinFulfillment' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKeinZahlungsabgleich' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int nSek */
	public $nSek;

	/** @var int nKeinShop */
	public $nKeinShop;

	/** @var int nKundenupdate */
	public $nKundenupdate;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var int nReDrucken */
	public $nReDrucken;

	/** @var int nWebshopAuftrag */
	public $nWebshopAuftrag;

	/** @var int nKeinEbay */
	public $nKeinEbay;

	/** @var int nEbaySmall */
	public $nEbaySmall;

	/** @var int nEbayAuftrag */
	public $nEbayAuftrag;

	/** @var int nKeinAmazon */
	public $nKeinAmazon;

	/** @var int nAmazonAuftrag */
	public $nAmazonAuftrag;

	/** @var int nEbayBestand */
	public $nEbayBestand;

	/** @var int nWaehrung */
	public $nWaehrung;

	/** @var int nRepricer */
	public $nRepricer;

	/** @var int nRetourenErstellen */
	public $nRetourenErstellen;

	/** @var int nUpdateBilderBeschreibung */
	public $nUpdateBilderBeschreibung;

	/** @var int nKeinFulfillment */
	public $nKeinFulfillment;

	/** @var int nKeinZahlungsabgleich */
	public $nKeinZahlungsabgleich;
}
