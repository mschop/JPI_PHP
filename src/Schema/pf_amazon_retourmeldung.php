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
