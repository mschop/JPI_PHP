<?php

namespace App\Db\Schema;

class ebay_transaction
{
	const TABLE_NAME = 'ebay_transaction';
	const kTransaction = 'kTransaction';
	const kBuyer = 'kBuyer';
	const AdjustmentAmount = 'AdjustmentAmount';
	const AmountPaid = 'AmountPaid';
	const BestOfferSale = 'BestOfferSale';
	const BuyerPaidStatus = 'BuyerPaidStatus';
	const ConvertedAdjustmentAmount = 'ConvertedAdjustmentAmount';
	const ConvertedAmountPaid = 'ConvertedAmountPaid';
	const ConvertedTransactionPrice = 'ConvertedTransactionPrice';
	const CreateDate = 'CreateDate';
	const FL_CommentText = 'FL_CommentText';
	const FL_CommentType = 'FL_CommentType';
	const FL_TargetUser = 'FL_TargetUser';
	const FR_CommentText = 'FR_CommentText';
	const FR_CommentType = 'FR_CommentType';
	const FR_TargetUser = 'FR_TargetUser';
	const FinalValueFee = 'FinalValueFee';
	const PaidTime = 'PaidTime';
	const QuantityPurchased = 'QuantityPurchased';
	const ShippedTime = 'ShippedTime';
	const SSS_ExpeditedService = 'SSS_ExpeditedService';
	const SSS_ShippingInsuranceCost = 'SSS_ShippingInsuranceCost';
	const SSS_ShippingService = 'SSS_ShippingService';
	const SSS_ShippingServiceAdditionalCost = 'SSS_ShippingServiceAdditionalCost';
	const SSS_ShippingServiceCost = 'SSS_ShippingServiceCost';
	const Status_BuyerSelectedShipping = 'Status_BuyerSelectedShipping';
	const Status_CheckoutStatus = 'Status_CheckoutStatus';
	const Status_CompleteStatus = 'Status_CompleteStatus';
	const Stauts_eBayPaymentStatus = 'Stauts_eBayPaymentStatus';
	const Status_LastTimeModified = 'Status_LastTimeModified';
	const Status_PaymentMethodUsed = 'Status_PaymentMethodUsed';
	const TransactionID = 'TransactionID';
	const TransactionPrice = 'TransactionPrice';
	const Status = 'Status';
	const ItemID = 'ItemID';
	const dZahlungsdatum = 'dZahlungsdatum';
	const kBestellung = 'kBestellung';
	const kAlien = 'kAlien';
	const VAT = 'VAT';
	const nCheckout = 'nCheckout';
	const cDispute = 'cDispute';
	const cDisputeInfo = 'cDisputeInfo';
	const kEigenschaftKombi = 'kEigenschaftKombi';
	const VariationTitle = 'VariationTitle';
	const SKU = 'SKU';
	const SiteID = 'SiteID';
	const nKonflikt = 'nKonflikt';
	const Currency = 'Currency';
	const COLUMN_NAMES = [
		'kTransaction',
		'kBuyer',
		'AdjustmentAmount',
		'AmountPaid',
		'BestOfferSale',
		'BuyerPaidStatus',
		'ConvertedAdjustmentAmount',
		'ConvertedAmountPaid',
		'ConvertedTransactionPrice',
		'CreateDate',
		'FL_CommentText',
		'FL_CommentType',
		'FL_TargetUser',
		'FR_CommentText',
		'FR_CommentType',
		'FR_TargetUser',
		'FinalValueFee',
		'PaidTime',
		'QuantityPurchased',
		'ShippedTime',
		'SSS_ExpeditedService',
		'SSS_ShippingInsuranceCost',
		'SSS_ShippingService',
		'SSS_ShippingServiceAdditionalCost',
		'SSS_ShippingServiceCost',
		'Status_BuyerSelectedShipping',
		'Status_CheckoutStatus',
		'Status_CompleteStatus',
		'Stauts_eBayPaymentStatus',
		'Status_LastTimeModified',
		'Status_PaymentMethodUsed',
		'TransactionID',
		'TransactionPrice',
		'Status',
		'ItemID',
		'dZahlungsdatum',
		'kBestellung',
		'kAlien',
		'VAT',
		'nCheckout',
		'cDispute',
		'cDisputeInfo',
		'kEigenschaftKombi',
		'VariationTitle',
		'SKU',
		'SiteID',
		'nKonflikt',
		'Currency',
	];
	const COLUMN_DEFINITIONS = [
		'kTransaction' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBuyer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'AdjustmentAmount' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'AmountPaid' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'BestOfferSale' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'BuyerPaidStatus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'ConvertedAdjustmentAmount' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ConvertedAmountPaid' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ConvertedTransactionPrice' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CreateDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'FL_CommentText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'FL_CommentType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'FL_TargetUser' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'FR_CommentText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'FR_CommentType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'FR_TargetUser' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'FinalValueFee' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'PaidTime' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'QuantityPurchased' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ShippedTime' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SSS_ExpeditedService' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SSS_ShippingInsuranceCost' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SSS_ShippingService' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SSS_ShippingServiceAdditionalCost' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SSS_ShippingServiceCost' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Status_BuyerSelectedShipping' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Status_CheckoutStatus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Status_CompleteStatus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Stauts_eBayPaymentStatus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Status_LastTimeModified' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Status_PaymentMethodUsed' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'TransactionID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'TransactionPrice' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Status' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ItemID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dZahlungsdatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAlien' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'VAT' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nCheckout' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDispute' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cDisputeInfo' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 512,
			'characterSetName' => 'iso_1',
		],
		'kEigenschaftKombi' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'VariationTitle' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'SiteID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKonflikt' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Currency' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kTransaction */
	public $kTransaction;

	/** @var int kBuyer */
	public $kBuyer;

	/** @var string AdjustmentAmount */
	public $AdjustmentAmount;

	/** @var string AmountPaid */
	public $AmountPaid;

	/** @var int BestOfferSale */
	public $BestOfferSale;

	/** @var string BuyerPaidStatus */
	public $BuyerPaidStatus;

	/** @var string ConvertedAdjustmentAmount */
	public $ConvertedAdjustmentAmount;

	/** @var string ConvertedAmountPaid */
	public $ConvertedAmountPaid;

	/** @var string ConvertedTransactionPrice */
	public $ConvertedTransactionPrice;

	/** @var string CreateDate */
	public $CreateDate;

	/** @var string FL_CommentText */
	public $FL_CommentText;

	/** @var string FL_CommentType */
	public $FL_CommentType;

	/** @var string FL_TargetUser */
	public $FL_TargetUser;

	/** @var string FR_CommentText */
	public $FR_CommentText;

	/** @var string FR_CommentType */
	public $FR_CommentType;

	/** @var string FR_TargetUser */
	public $FR_TargetUser;

	/** @var string FinalValueFee */
	public $FinalValueFee;

	/** @var string PaidTime */
	public $PaidTime;

	/** @var int QuantityPurchased */
	public $QuantityPurchased;

	/** @var string ShippedTime */
	public $ShippedTime;

	/** @var int SSS_ExpeditedService */
	public $SSS_ExpeditedService;

	/** @var string SSS_ShippingInsuranceCost */
	public $SSS_ShippingInsuranceCost;

	/** @var string SSS_ShippingService */
	public $SSS_ShippingService;

	/** @var string SSS_ShippingServiceAdditionalCost */
	public $SSS_ShippingServiceAdditionalCost;

	/** @var string SSS_ShippingServiceCost */
	public $SSS_ShippingServiceCost;

	/** @var int Status_BuyerSelectedShipping */
	public $Status_BuyerSelectedShipping;

	/** @var string Status_CheckoutStatus */
	public $Status_CheckoutStatus;

	/** @var string Status_CompleteStatus */
	public $Status_CompleteStatus;

	/** @var string Stauts_eBayPaymentStatus */
	public $Stauts_eBayPaymentStatus;

	/** @var string Status_LastTimeModified */
	public $Status_LastTimeModified;

	/** @var string Status_PaymentMethodUsed */
	public $Status_PaymentMethodUsed;

	/** @var string TransactionID */
	public $TransactionID;

	/** @var string TransactionPrice */
	public $TransactionPrice;

	/** @var int Status */
	public $Status;

	/** @var string ItemID */
	public $ItemID;

	/** @var string dZahlungsdatum */
	public $dZahlungsdatum;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kAlien */
	public $kAlien;

	/** @var string VAT */
	public $VAT;

	/** @var int nCheckout */
	public $nCheckout;

	/** @var string cDispute */
	public $cDispute;

	/** @var string cDisputeInfo */
	public $cDisputeInfo;

	/** @var int kEigenschaftKombi */
	public $kEigenschaftKombi;

	/** @var string VariationTitle */
	public $VariationTitle;

	/** @var string SKU */
	public $SKU;

	/** @var int SiteID */
	public $SiteID;

	/** @var int nKonflikt */
	public $nKonflikt;

	/** @var string Currency */
	public $Currency;
}
