<?php

namespace App\Db\Schema;

class pf_amazon_angebot
{
	const TABLE_NAME = 'pf_amazon_angebot';
	const cSellerSKU = 'cSellerSKU';
	const kUser = 'kUser';
	const cItemName = 'cItemName';
	const cListingId = 'cListingId';
	const fPrice = 'fPrice';
	const nQuantity = 'nQuantity';
	const dOpenDate = 'dOpenDate';
	const cItemIsMarketplace = 'cItemIsMarketplace';
	const nProductIdType = 'nProductIdType';
	const nItemCondition = 'nItemCondition';
	const cASIN1 = 'cASIN1';
	const cASIN2 = 'cASIN2';
	const cASIN3 = 'cASIN3';
	const nWillShipInternationally = 'nWillShipInternationally';
	const cExpeditedShipping = 'cExpeditedShipping';
	const cProductId = 'cProductId';
	const cFulfillmentChannel = 'cFulfillmentChannel';
	const nChangedPrice = 'nChangedPrice';
	const nChangedQuantity = 'nChangedQuantity';
	const nPlattform = 'nPlattform';
	const COLUMN_NAMES = [
		'cSellerSKU',
		'kUser',
		'cItemName',
		'cListingId',
		'fPrice',
		'nQuantity',
		'dOpenDate',
		'cItemIsMarketplace',
		'nProductIdType',
		'nItemCondition',
		'cASIN1',
		'cASIN2',
		'cASIN3',
		'nWillShipInternationally',
		'cExpeditedShipping',
		'cProductId',
		'cFulfillmentChannel',
		'nChangedPrice',
		'nChangedQuantity',
		'nPlattform',
	];
	const COLUMN_DEFINITIONS = [
		'cSellerSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cItemName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cListingId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'fPrice' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nQuantity' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dOpenDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cItemIsMarketplace' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'nProductIdType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nItemCondition' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cASIN1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cASIN2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cASIN3' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'nWillShipInternationally' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cExpeditedShipping' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'cProductId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
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
		'nChangedPrice' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nChangedQuantity' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var int kUser */
	public $kUser;

	/** @var string cItemName */
	public $cItemName;

	/** @var string cListingId */
	public $cListingId;

	/** @var string fPrice */
	public $fPrice;

	/** @var int nQuantity */
	public $nQuantity;

	/** @var string dOpenDate */
	public $dOpenDate;

	/** @var string cItemIsMarketplace */
	public $cItemIsMarketplace;

	/** @var int nProductIdType */
	public $nProductIdType;

	/** @var int nItemCondition */
	public $nItemCondition;

	/** @var string cASIN1 */
	public $cASIN1;

	/** @var string cASIN2 */
	public $cASIN2;

	/** @var string cASIN3 */
	public $cASIN3;

	/** @var int nWillShipInternationally */
	public $nWillShipInternationally;

	/** @var string cExpeditedShipping */
	public $cExpeditedShipping;

	/** @var string cProductId */
	public $cProductId;

	/** @var string cFulfillmentChannel */
	public $cFulfillmentChannel;

	/** @var int nChangedPrice */
	public $nChangedPrice;

	/** @var int nChangedQuantity */
	public $nChangedQuantity;

	/** @var int nPlattform */
	public $nPlattform;
}
