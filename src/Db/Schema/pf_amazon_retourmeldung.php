<?php

namespace App\Db\Schema;

class pf_amazon_retourmeldung
{
	const TABLE_NAME = 'pf_amazon_retourmeldung';
	const kAmazonRetourMeldung = 'kAmazonRetourMeldung';
	const cOrderID = 'cOrderID';
	const cOrderItemId = 'cOrderItemId';
	const cCancelReason = 'cCancelReason';
	const cAdjustmentReason = 'cAdjustmentReason';
	const dErstellt = 'dErstellt';
	const dBearbeitet = 'dBearbeitet';
	const COLUMN_NAMES = [
		'kAmazonRetourMeldung',
		'cOrderID',
		'cOrderItemId',
		'cCancelReason',
		'cAdjustmentReason',
		'dErstellt',
		'dBearbeitet',
	];
	const COLUMN_DEFINITIONS = [
		'kAmazonRetourMeldung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cOrderID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cOrderItemId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cCancelReason' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cAdjustmentReason' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dBearbeitet' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAmazonRetourMeldung */
	public $kAmazonRetourMeldung;

	/** @var string cOrderID */
	public $cOrderID;

	/** @var string cOrderItemId */
	public $cOrderItemId;

	/** @var string cCancelReason */
	public $cCancelReason;

	/** @var string cAdjustmentReason */
	public $cAdjustmentReason;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dBearbeitet */
	public $dBearbeitet;
}
