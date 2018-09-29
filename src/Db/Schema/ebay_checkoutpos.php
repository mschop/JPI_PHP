<?php

namespace App\Db\Schema;

class ebay_checkoutpos
{
	const TABLE_NAME = 'ebay_checkoutpos';
	const kEbayCheckoutPos = 'kEbayCheckoutPos';
	const kEbayCheckout = 'kEbayCheckout';
	const ItemID = 'ItemID';
	const TransactionID = 'TransactionID';
	const kXCheckoutPos = 'kXCheckoutPos';
	const fAnzahl = 'fAnzahl';
	const fPreis = 'fPreis';
	const kArtikel = 'kArtikel';
	const COLUMN_NAMES = [
		'kEbayCheckoutPos',
		'kEbayCheckout',
		'ItemID',
		'TransactionID',
		'kXCheckoutPos',
		'fAnzahl',
		'fPreis',
		'kArtikel',
	];
	const COLUMN_DEFINITIONS = [
		'kEbayCheckoutPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayCheckout' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
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
		'TransactionID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kXCheckoutPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEbayCheckoutPos */
	public $kEbayCheckoutPos;

	/** @var int kEbayCheckout */
	public $kEbayCheckout;

	/** @var string ItemID */
	public $ItemID;

	/** @var string TransactionID */
	public $TransactionID;

	/** @var int kXCheckoutPos */
	public $kXCheckoutPos;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string fPreis */
	public $fPreis;

	/** @var int kArtikel */
	public $kArtikel;
}
