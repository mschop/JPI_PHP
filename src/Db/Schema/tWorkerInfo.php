<?php

namespace App\Db\Schema;

class tWorkerInfo
{
	const TABLE_NAME = 'tWorkerInfo';
	const nEbayPID = 'nEbayPID';
	const dEbayStart = 'dEbayStart';
	const dEbayEnde = 'dEbayEnde';
	const nEbayOption = 'nEbayOption';
	const nAmazonPID = 'nAmazonPID';
	const dAmazonStart = 'dAmazonStart';
	const dAmazonEnde = 'dAmazonEnde';
	const nAmazonOption = 'nAmazonOption';
	const nShopPID = 'nShopPID';
	const dShopStart = 'dShopStart';
	const dShopEnde = 'dShopEnde';
	const nShopOption = 'nShopOption';
	const COLUMN_NAMES = [
		'nEbayPID',
		'dEbayStart',
		'dEbayEnde',
		'nEbayOption',
		'nAmazonPID',
		'dAmazonStart',
		'dAmazonEnde',
		'nAmazonOption',
		'nShopPID',
		'dShopStart',
		'dShopEnde',
		'nShopOption',
	];
	const COLUMN_DEFINITIONS = [
		'nEbayPID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dEbayStart' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dEbayEnde' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEbayOption' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAmazonPID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAmazonStart' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAmazonEnde' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAmazonOption' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nShopPID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dShopStart' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dShopEnde' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nShopOption' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int nEbayPID */
	public $nEbayPID;

	/** @var string dEbayStart */
	public $dEbayStart;

	/** @var string dEbayEnde */
	public $dEbayEnde;

	/** @var int nEbayOption */
	public $nEbayOption;

	/** @var int nAmazonPID */
	public $nAmazonPID;

	/** @var string dAmazonStart */
	public $dAmazonStart;

	/** @var string dAmazonEnde */
	public $dAmazonEnde;

	/** @var int nAmazonOption */
	public $nAmazonOption;

	/** @var int nShopPID */
	public $nShopPID;

	/** @var string dShopStart */
	public $dShopStart;

	/** @var string dShopEnde */
	public $dShopEnde;

	/** @var int nShopOption */
	public $nShopOption;
}
