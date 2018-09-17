<?php

namespace App\Schema;

class ebay_queue_out
{
	const TABLE_NAME = 'ebay_queue_out';
	const ItemID = 'ItemID';
	const TransactionID = 'TransactionID';
	const kEbayUser = 'kEbayUser';
	const nType = 'nType';
	const cIdentcode = 'cIdentcode';
	const cCarrierCode = 'cCarrierCode';

	/** @var string ItemID */
	public $ItemID;

	/** @var string TransactionID */
	public $TransactionID;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var int nType */
	public $nType;

	/** @var string cIdentcode */
	public $cIdentcode;

	/** @var string cCarrierCode */
	public $cCarrierCode;
}
