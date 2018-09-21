<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'cSellerSKU' => 'varchar',
		'kUser' => 'int',
		'nQuantity' => 'int',
		'cConditionType' => 'varchar',
		'cWarehouseConditionType' => 'varchar',
		'nQtyWarehouse' => 'int',
		'nQtyUnsellable' => 'int',
		'nQtyReserved' => 'int',
		'nQtyTotal' => 'int',
		'nQtyInboundWorking' => 'int',
		'nQtyInboundShipped' => 'int',
		'nQtyReceiving' => 'int',
		'fVolume' => 'decimal',
		'cFNSKU' => 'varchar',
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
