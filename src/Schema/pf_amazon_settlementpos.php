<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kMessageId' => 'bigint',
		'kUser' => 'int',
		'SettlementID' => 'bigint',
		'TransactionType' => 'varchar',
		'OrderID' => 'varchar',
		'MerchantOrderID' => 'varchar',
		'AdjustmentID' => 'varchar',
		'ShipmentID' => 'varchar',
		'MarketplaceName' => 'varchar',
		'AmountType' => 'varchar',
		'AmountDescription' => 'varchar',
		'Amount' => 'decimal',
		'FulfillmentID' => 'varchar',
		'PostedDateTime' => 'datetime',
		'OrderItemCode' => 'varchar',
		'MerchantOrderItemID' => 'varchar',
		'SKU' => 'varchar',
		'QuantityPurchased' => 'int',
		'PromotionID' => 'varchar',
		'dErstellt' => 'datetime',
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
