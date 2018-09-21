<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kAmazonRetourMeldung' => 'int',
		'cOrderID' => 'varchar',
		'cOrderItemId' => 'varchar',
		'cCancelReason' => 'varchar',
		'cAdjustmentReason' => 'varchar',
		'dErstellt' => 'datetime',
		'dBearbeitet' => 'datetime',
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
