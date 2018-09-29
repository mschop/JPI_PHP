<?php

namespace App\Db\Schema;

class pf_amazon_angebot_fba
{
	const TABLE_NAME = 'pf_amazon_angebot_fba';
	const cSellerSKU = 'cSellerSKU';
	const kUser = 'kUser';
	const nQuantity = 'nQuantity';
	const cConditionType = 'cConditionType';
	const cWarehouseConditionType = 'cWarehouseConditionType';
	const nQtyWarehouse = 'nQtyWarehouse';
	const nQtyUnsellable = 'nQtyUnsellable';
	const nQtyReserved = 'nQtyReserved';
	const nQtyTotal = 'nQtyTotal';
	const nQtyInboundWorking = 'nQtyInboundWorking';
	const nQtyInboundShipped = 'nQtyInboundShipped';
	const nQtyReceiving = 'nQtyReceiving';
	const fVolume = 'fVolume';
	const cFNSKU = 'cFNSKU';
	const COLUMN_NAMES = [
		'cSellerSKU',
		'kUser',
		'nQuantity',
		'cConditionType',
		'cWarehouseConditionType',
		'nQtyWarehouse',
		'nQtyUnsellable',
		'nQtyReserved',
		'nQtyTotal',
		'nQtyInboundWorking',
		'nQtyInboundShipped',
		'nQtyReceiving',
		'fVolume',
		'cFNSKU',
	];
	const COLUMN_DEFINITIONS = [
		'cSellerSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
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
		'cConditionType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 25,
			'characterSetName' => 'iso_1',
		],
		'cWarehouseConditionType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 25,
			'characterSetName' => 'iso_1',
		],
		'nQtyWarehouse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nQtyUnsellable' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nQtyReserved' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nQtyTotal' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nQtyInboundWorking' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nQtyInboundShipped' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nQtyReceiving' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVolume' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFNSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var int kUser */
	public $kUser;

	/** @var int nQuantity */
	public $nQuantity;

	/** @var string cConditionType */
	public $cConditionType;

	/** @var string cWarehouseConditionType */
	public $cWarehouseConditionType;

	/** @var int nQtyWarehouse */
	public $nQtyWarehouse;

	/** @var int nQtyUnsellable */
	public $nQtyUnsellable;

	/** @var int nQtyReserved */
	public $nQtyReserved;

	/** @var int nQtyTotal */
	public $nQtyTotal;

	/** @var int nQtyInboundWorking */
	public $nQtyInboundWorking;

	/** @var int nQtyInboundShipped */
	public $nQtyInboundShipped;

	/** @var int nQtyReceiving */
	public $nQtyReceiving;

	/** @var string fVolume */
	public $fVolume;

	/** @var string cFNSKU */
	public $cFNSKU;
}
