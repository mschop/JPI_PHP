<?php

namespace App\Db\Schema;

class pf_amazon_bestellung
{
	const TABLE_NAME = 'pf_amazon_bestellung';
	const kAmazonBestellung = 'kAmazonBestellung';
	const kMessageId = 'kMessageId';
	const kUser = 'kUser';
	const cOrderId = 'cOrderId';
	const cBuyerName = 'cBuyerName';
	const cBuyerEmail = 'cBuyerEmail';
	const cBuyerPhoneNumber = 'cBuyerPhoneNumber';
	const cBillAddress1 = 'cBillAddress1';
	const cBillAddress2 = 'cBillAddress2';
	const cBillAddress3 = 'cBillAddress3';
	const cBillCity = 'cBillCity';
	const cBillState = 'cBillState';
	const cBillPostalCode = 'cBillPostalCode';
	const cBillCountry = 'cBillCountry';
	const cRecipientName = 'cRecipientName';
	const cShipAddress1 = 'cShipAddress1';
	const cShipAddress2 = 'cShipAddress2';
	const cShipAddress3 = 'cShipAddress3';
	const cShipCity = 'cShipCity';
	const cShipState = 'cShipState';
	const cShipPostalCode = 'cShipPostalCode';
	const cShipCountry = 'cShipCountry';
	const cShipPhoneNumber = 'cShipPhoneNumber';
	const cCurrency = 'cCurrency';
	const cShipServiceLevel = 'cShipServiceLevel';
	const fItemPromotionDiscount = 'fItemPromotionDiscount';
	const cItemPromotionId = 'cItemPromotionId';
	const fShipPromotionDiscount = 'fShipPromotionDiscount';
	const cShipPromotionId = 'cShipPromotionId';
	const fVersandkosten = 'fVersandkosten';
	const dPaymentsDate = 'dPaymentsDate';
	const dPurchaseDate = 'dPurchaseDate';
	const dErstellt = 'dErstellt';
	const nStatus = 'nStatus';
	const nDeleted = 'nDeleted';
	const cSalesChannel = 'cSalesChannel';
	const dShipmentDate = 'dShipmentDate';
	const cMerchantOrderId = 'cMerchantOrderId';
	const nErrorCode = 'nErrorCode';
	const cErrorMessage = 'cErrorMessage';
	const dErrorErstellt = 'dErrorErstellt';
	const nFBA = 'nFBA';
	const kFulfillmentAuftrag = 'kFulfillmentAuftrag';
	const cOrderStatus = 'cOrderStatus';
	const cVersandlandISO = 'cVersandlandISO';
	const nPrime = 'nPrime';
	const cKundenauftragsnummer = 'cKundenauftragsnummer';
	const nIsAmazonInvoice = 'nIsAmazonInvoice';
	const nB2B = 'nB2B';
	const COLUMN_NAMES = [
		'kAmazonBestellung',
		'kMessageId',
		'kUser',
		'cOrderId',
		'cBuyerName',
		'cBuyerEmail',
		'cBuyerPhoneNumber',
		'cBillAddress1',
		'cBillAddress2',
		'cBillAddress3',
		'cBillCity',
		'cBillState',
		'cBillPostalCode',
		'cBillCountry',
		'cRecipientName',
		'cShipAddress1',
		'cShipAddress2',
		'cShipAddress3',
		'cShipCity',
		'cShipState',
		'cShipPostalCode',
		'cShipCountry',
		'cShipPhoneNumber',
		'cCurrency',
		'cShipServiceLevel',
		'fItemPromotionDiscount',
		'cItemPromotionId',
		'fShipPromotionDiscount',
		'cShipPromotionId',
		'fVersandkosten',
		'dPaymentsDate',
		'dPurchaseDate',
		'dErstellt',
		'nStatus',
		'nDeleted',
		'cSalesChannel',
		'dShipmentDate',
		'cMerchantOrderId',
		'nErrorCode',
		'cErrorMessage',
		'dErrorErstellt',
		'nFBA',
		'kFulfillmentAuftrag',
		'cOrderStatus',
		'cVersandlandISO',
		'nPrime',
		'cKundenauftragsnummer',
		'nIsAmazonInvoice',
		'nB2B',
	];
	const COLUMN_DEFINITIONS = [
		'kAmazonBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMessageId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
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
		'cBuyerName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBuyerEmail' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBuyerPhoneNumber' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cBillAddress1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBillAddress2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBillAddress3' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBillCity' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cBillState' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cBillPostalCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cBillCountry' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'cRecipientName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cShipAddress1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cShipAddress2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cShipAddress3' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cShipCity' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cShipState' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cShipPostalCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cShipCountry' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'cShipPhoneNumber' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cCurrency' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'cShipServiceLevel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'fItemPromotionDiscount' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cItemPromotionId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'fShipPromotionDiscount' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cShipPromotionId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
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
		'dPaymentsDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dPurchaseDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDeleted' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSalesChannel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'dShipmentDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMerchantOrderId' => [
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
		'nFBA' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFulfillmentAuftrag' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cOrderStatus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cVersandlandISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 3,
			'characterSetName' => 'iso_1',
		],
		'nPrime' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKundenauftragsnummer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 250,
			'characterSetName' => 'iso_1',
		],
		'nIsAmazonInvoice' => [
			'type' => 'bit',
			'phpType' => 'boolean',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nB2B' => [
			'type' => 'bit',
			'phpType' => 'boolean',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAmazonBestellung */
	public $kAmazonBestellung;

	/** @var int kMessageId */
	public $kMessageId;

	/** @var int kUser */
	public $kUser;

	/** @var string cOrderId */
	public $cOrderId;

	/** @var string cBuyerName */
	public $cBuyerName;

	/** @var string cBuyerEmail */
	public $cBuyerEmail;

	/** @var string cBuyerPhoneNumber */
	public $cBuyerPhoneNumber;

	/** @var string cBillAddress1 */
	public $cBillAddress1;

	/** @var string cBillAddress2 */
	public $cBillAddress2;

	/** @var string cBillAddress3 */
	public $cBillAddress3;

	/** @var string cBillCity */
	public $cBillCity;

	/** @var string cBillState */
	public $cBillState;

	/** @var string cBillPostalCode */
	public $cBillPostalCode;

	/** @var string cBillCountry */
	public $cBillCountry;

	/** @var string cRecipientName */
	public $cRecipientName;

	/** @var string cShipAddress1 */
	public $cShipAddress1;

	/** @var string cShipAddress2 */
	public $cShipAddress2;

	/** @var string cShipAddress3 */
	public $cShipAddress3;

	/** @var string cShipCity */
	public $cShipCity;

	/** @var string cShipState */
	public $cShipState;

	/** @var string cShipPostalCode */
	public $cShipPostalCode;

	/** @var string cShipCountry */
	public $cShipCountry;

	/** @var string cShipPhoneNumber */
	public $cShipPhoneNumber;

	/** @var string cCurrency */
	public $cCurrency;

	/** @var string cShipServiceLevel */
	public $cShipServiceLevel;

	/** @var string fItemPromotionDiscount */
	public $fItemPromotionDiscount;

	/** @var string cItemPromotionId */
	public $cItemPromotionId;

	/** @var string fShipPromotionDiscount */
	public $fShipPromotionDiscount;

	/** @var string cShipPromotionId */
	public $cShipPromotionId;

	/** @var string fVersandkosten */
	public $fVersandkosten;

	/** @var string dPaymentsDate */
	public $dPaymentsDate;

	/** @var string dPurchaseDate */
	public $dPurchaseDate;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nStatus */
	public $nStatus;

	/** @var int nDeleted */
	public $nDeleted;

	/** @var string cSalesChannel */
	public $cSalesChannel;

	/** @var string dShipmentDate */
	public $dShipmentDate;

	/** @var string cMerchantOrderId */
	public $cMerchantOrderId;

	/** @var int nErrorCode */
	public $nErrorCode;

	/** @var string cErrorMessage */
	public $cErrorMessage;

	/** @var string dErrorErstellt */
	public $dErrorErstellt;

	/** @var int nFBA */
	public $nFBA;

	/** @var int kFulfillmentAuftrag */
	public $kFulfillmentAuftrag;

	/** @var string cOrderStatus */
	public $cOrderStatus;

	/** @var string cVersandlandISO */
	public $cVersandlandISO;

	/** @var int nPrime */
	public $nPrime;

	/** @var string cKundenauftragsnummer */
	public $cKundenauftragsnummer;

	/** @var boolean nIsAmazonInvoice */
	public $nIsAmazonInvoice;

	/** @var boolean nB2B */
	public $nB2B;
}
