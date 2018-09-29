<?php

namespace App\Db\Schema;

class pf_amazon_settlementpos
{
	const TABLE_NAME = 'pf_amazon_settlementpos';
	const kMessageId = 'kMessageId';
	const kUser = 'kUser';
	const SettlementID = 'SettlementID';
	const TransactionType = 'TransactionType';
	const OrderID = 'OrderID';
	const MerchantOrderID = 'MerchantOrderID';
	const AdjustmentID = 'AdjustmentID';
	const ShipmentID = 'ShipmentID';
	const MarketplaceName = 'MarketplaceName';
	const AmountType = 'AmountType';
	const AmountDescription = 'AmountDescription';
	const Amount = 'Amount';
	const FulfillmentID = 'FulfillmentID';
	const PostedDateTime = 'PostedDateTime';
	const OrderItemCode = 'OrderItemCode';
	const MerchantOrderItemID = 'MerchantOrderItemID';
	const SKU = 'SKU';
	const QuantityPurchased = 'QuantityPurchased';
	const PromotionID = 'PromotionID';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = [
		'kMessageId',
		'kUser',
		'SettlementID',
		'TransactionType',
		'OrderID',
		'MerchantOrderID',
		'AdjustmentID',
		'ShipmentID',
		'MarketplaceName',
		'AmountType',
		'AmountDescription',
		'Amount',
		'FulfillmentID',
		'PostedDateTime',
		'OrderItemCode',
		'MerchantOrderItemID',
		'SKU',
		'QuantityPurchased',
		'PromotionID',
		'dErstellt',
	];
	const COLUMN_DEFINITIONS = [
		'kMessageId' => [
			'type' => 'bigint',
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
		'SettlementID' => [
			'type' => 'bigint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'TransactionType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'OrderID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'MerchantOrderID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'AdjustmentID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'ShipmentID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'MarketplaceName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'AmountType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'AmountDescription' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'Amount' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'FulfillmentID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'PostedDateTime' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'OrderItemCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'MerchantOrderItemID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'SKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'QuantityPurchased' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'PromotionID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kMessageId */
	public $kMessageId;

	/** @var int kUser */
	public $kUser;

	/** @var int SettlementID */
	public $SettlementID;

	/** @var string TransactionType */
	public $TransactionType;

	/** @var string OrderID */
	public $OrderID;

	/** @var string MerchantOrderID */
	public $MerchantOrderID;

	/** @var string AdjustmentID */
	public $AdjustmentID;

	/** @var string ShipmentID */
	public $ShipmentID;

	/** @var string MarketplaceName */
	public $MarketplaceName;

	/** @var string AmountType */
	public $AmountType;

	/** @var string AmountDescription */
	public $AmountDescription;

	/** @var string Amount */
	public $Amount;

	/** @var string FulfillmentID */
	public $FulfillmentID;

	/** @var string PostedDateTime */
	public $PostedDateTime;

	/** @var string OrderItemCode */
	public $OrderItemCode;

	/** @var string MerchantOrderItemID */
	public $MerchantOrderItemID;

	/** @var string SKU */
	public $SKU;

	/** @var int QuantityPurchased */
	public $QuantityPurchased;

	/** @var string PromotionID */
	public $PromotionID;

	/** @var string dErstellt */
	public $dErstellt;
}
