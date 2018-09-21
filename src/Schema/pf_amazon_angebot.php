<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'cSellerSKU' => 'varchar',
		'kUser' => 'int',
		'cItemName' => 'varchar',
		'cListingId' => 'varchar',
		'fPrice' => 'decimal',
		'nQuantity' => 'int',
		'dOpenDate' => 'datetime',
		'cItemIsMarketplace' => 'varchar',
		'nProductIdType' => 'tinyint',
		'nItemCondition' => 'tinyint',
		'cASIN1' => 'varchar',
		'cASIN2' => 'varchar',
		'cASIN3' => 'varchar',
		'nWillShipInternationally' => 'tinyint',
		'cExpeditedShipping' => 'varchar',
		'cProductId' => 'varchar',
		'cFulfillmentChannel' => 'varchar',
		'nChangedPrice' => 'tinyint',
		'nChangedQuantity' => 'tinyint',
		'nPlattform' => 'int',
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
