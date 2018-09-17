<?php

namespace App\Schema;

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
