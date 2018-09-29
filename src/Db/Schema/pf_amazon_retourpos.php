<?php

namespace App\Db\Schema;

class pf_amazon_retourpos
{
	const TABLE_NAME = 'pf_amazon_retourpos';
	const kAmazonRetourPos = 'kAmazonRetourPos';
	const kUser = 'kUser';
	const kAmazonBestellung = 'kAmazonBestellung';
	const cOrderId = 'cOrderId';
	const cSellerSKU = 'cSellerSKU';
	const cFremdSKU = 'cFremdSKU';
	const cASIN = 'cASIN';
	const cArtikelname = 'cArtikelname';
	const nMenge = 'nMenge';
	const cFulfillmentCenter = 'cFulfillmentCenter';
	const cArtikelzustand = 'cArtikelzustand';
	const cRueckgabegrund = 'cRueckgabegrund';
	const dRetourzeit = 'dRetourzeit';
	const nStatus = 'nStatus';
	const dEingelesen = 'dEingelesen';
	const kMessageId = 'kMessageId';
	const kGutschrift = 'kGutschrift';
	const cFehler = 'cFehler';
	const cLicencePlateNumber = 'cLicencePlateNumber';
	const cKundenkommentar = 'cKundenkommentar';
	const COLUMN_NAMES = [
		'kAmazonRetourPos',
		'kUser',
		'kAmazonBestellung',
		'cOrderId',
		'cSellerSKU',
		'cFremdSKU',
		'cASIN',
		'cArtikelname',
		'nMenge',
		'cFulfillmentCenter',
		'cArtikelzustand',
		'cRueckgabegrund',
		'dRetourzeit',
		'nStatus',
		'dEingelesen',
		'kMessageId',
		'kGutschrift',
		'cFehler',
		'cLicencePlateNumber',
		'cKundenkommentar',
	];
	const COLUMN_DEFINITIONS = [
		'kAmazonRetourPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAmazonBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cOrderId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cSellerSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cFremdSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cASIN' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cArtikelname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nMenge' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFulfillmentCenter' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cArtikelzustand' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cRueckgabegrund' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'dRetourzeit' => [
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
		'dEingelesen' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMessageId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kGutschrift' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFehler' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4000,
			'characterSetName' => 'iso_1',
		],
		'cLicencePlateNumber' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cKundenkommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kAmazonRetourPos */
	public $kAmazonRetourPos;

	/** @var int kUser */
	public $kUser;

	/** @var int kAmazonBestellung */
	public $kAmazonBestellung;

	/** @var string cOrderId */
	public $cOrderId;

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var string cFremdSKU */
	public $cFremdSKU;

	/** @var string cASIN */
	public $cASIN;

	/** @var string cArtikelname */
	public $cArtikelname;

	/** @var int nMenge */
	public $nMenge;

	/** @var string cFulfillmentCenter */
	public $cFulfillmentCenter;

	/** @var string cArtikelzustand */
	public $cArtikelzustand;

	/** @var string cRueckgabegrund */
	public $cRueckgabegrund;

	/** @var string dRetourzeit */
	public $dRetourzeit;

	/** @var int nStatus */
	public $nStatus;

	/** @var string dEingelesen */
	public $dEingelesen;

	/** @var int kMessageId */
	public $kMessageId;

	/** @var int kGutschrift */
	public $kGutschrift;

	/** @var string cFehler */
	public $cFehler;

	/** @var string cLicencePlateNumber */
	public $cLicencePlateNumber;

	/** @var string cKundenkommentar */
	public $cKundenkommentar;
}
