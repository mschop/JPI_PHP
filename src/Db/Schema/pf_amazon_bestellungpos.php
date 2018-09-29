<?php

namespace App\Db\Schema;

class pf_amazon_bestellungpos
{
	const TABLE_NAME = 'pf_amazon_bestellungpos';
	const kAmazonBestellungPos = 'kAmazonBestellungPos';
	const kAmazonBestellung = 'kAmazonBestellung';
	const cArtNr = 'cArtNr';
	const cName = 'cName';
	const nQuantityPurchased = 'nQuantityPurchased';
	const fItemPrice = 'fItemPrice';
	const fItemTax = 'fItemTax';
	const fShippingPrice = 'fShippingPrice';
	const fShippingTax = 'fShippingTax';
	const cOrderItemId = 'cOrderItemId';
	const nVersandt = 'nVersandt';
	const cCarrier = 'cCarrier';
	const cTrackingNumber = 'cTrackingNumber';
	const dEstimatedArrivalDate = 'dEstimatedArrivalDate';
	const cFulfillmentCenterId = 'cFulfillmentCenterId';
	const cFulfillmentChannel = 'cFulfillmentChannel';
	const cMerchantOrderItemId = 'cMerchantOrderItemId';
	const nErrorCode = 'nErrorCode';
	const cErrorMessage = 'cErrorMessage';
	const dErrorErstellt = 'dErrorErstellt';
	const fGeschenkverpackungKosten = 'fGeschenkverpackungKosten';
	const cGeschenkverpackungTyp = 'cGeschenkverpackungTyp';
	const cGrusstext = 'cGrusstext';
	const nGeschenk = 'nGeschenk';
	const kFulfillmentAuftragPos = 'kFulfillmentAuftragPos';
	const fPreisNetto = 'fPreisNetto';
	const COLUMN_NAMES = [
		'kAmazonBestellungPos',
		'kAmazonBestellung',
		'cArtNr',
		'cName',
		'nQuantityPurchased',
		'fItemPrice',
		'fItemTax',
		'fShippingPrice',
		'fShippingTax',
		'cOrderItemId',
		'nVersandt',
		'cCarrier',
		'cTrackingNumber',
		'dEstimatedArrivalDate',
		'cFulfillmentCenterId',
		'cFulfillmentChannel',
		'cMerchantOrderItemId',
		'nErrorCode',
		'cErrorMessage',
		'dErrorErstellt',
		'fGeschenkverpackungKosten',
		'cGeschenkverpackungTyp',
		'cGrusstext',
		'nGeschenk',
		'kFulfillmentAuftragPos',
		'fPreisNetto',
	];
	const COLUMN_DEFINITIONS = [
		'kAmazonBestellungPos' => [
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
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cArtNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
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
		'nQuantityPurchased' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fItemPrice' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fItemTax' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fShippingPrice' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fShippingTax' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cOrderItemId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'nVersandt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cCarrier' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cTrackingNumber' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'dEstimatedArrivalDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFulfillmentCenterId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cFulfillmentChannel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cMerchantOrderItemId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'nErrorCode' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cErrorMessage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2000,
			'characterSetName' => 'iso_1',
		],
		'dErrorErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGeschenkverpackungKosten' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cGeschenkverpackungTyp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cGrusstext' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nGeschenk' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFulfillmentAuftragPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPreisNetto' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAmazonBestellungPos */
	public $kAmazonBestellungPos;

	/** @var int kAmazonBestellung */
	public $kAmazonBestellung;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var string cName */
	public $cName;

	/** @var int nQuantityPurchased */
	public $nQuantityPurchased;

	/** @var string fItemPrice */
	public $fItemPrice;

	/** @var string fItemTax */
	public $fItemTax;

	/** @var string fShippingPrice */
	public $fShippingPrice;

	/** @var string fShippingTax */
	public $fShippingTax;

	/** @var string cOrderItemId */
	public $cOrderItemId;

	/** @var int nVersandt */
	public $nVersandt;

	/** @var string cCarrier */
	public $cCarrier;

	/** @var string cTrackingNumber */
	public $cTrackingNumber;

	/** @var string dEstimatedArrivalDate */
	public $dEstimatedArrivalDate;

	/** @var string cFulfillmentCenterId */
	public $cFulfillmentCenterId;

	/** @var string cFulfillmentChannel */
	public $cFulfillmentChannel;

	/** @var string cMerchantOrderItemId */
	public $cMerchantOrderItemId;

	/** @var int nErrorCode */
	public $nErrorCode;

	/** @var string cErrorMessage */
	public $cErrorMessage;

	/** @var string dErrorErstellt */
	public $dErrorErstellt;

	/** @var string fGeschenkverpackungKosten */
	public $fGeschenkverpackungKosten;

	/** @var string cGeschenkverpackungTyp */
	public $cGeschenkverpackungTyp;

	/** @var string cGrusstext */
	public $cGrusstext;

	/** @var int nGeschenk */
	public $nGeschenk;

	/** @var int kFulfillmentAuftragPos */
	public $kFulfillmentAuftragPos;

	/** @var string fPreisNetto */
	public $fPreisNetto;
}
