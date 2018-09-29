<?php

namespace App\Db\Schema;

class pf_amazon_retourmeldungadjustment
{
	const TABLE_NAME = 'pf_amazon_retourmeldungadjustment';
	const kAmazonRetourMeldung = 'kAmazonRetourMeldung';
	const cItemPriceAdjustmentType = 'cItemPriceAdjustmentType';
	const cPromotionClaimCode = 'cPromotionClaimCode';
	const fAmount = 'fAmount';
	const cCurrency = 'cCurrency';
	const COLUMN_NAMES = ['kAmazonRetourMeldung', 'cItemPriceAdjustmentType', 'cPromotionClaimCode', 'fAmount', 'cCurrency'];
	const COLUMN_DEFINITIONS = [
		'kAmazonRetourMeldung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cItemPriceAdjustmentType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cPromotionClaimCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'fAmount' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cCurrency' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kAmazonRetourMeldung */
	public $kAmazonRetourMeldung;

	/** @var string cItemPriceAdjustmentType */
	public $cItemPriceAdjustmentType;

	/** @var string cPromotionClaimCode */
	public $cPromotionClaimCode;

	/** @var string fAmount */
	public $fAmount;

	/** @var string cCurrency */
	public $cCurrency;
}
