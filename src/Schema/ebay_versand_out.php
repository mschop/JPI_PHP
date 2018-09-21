<?php

namespace App\Schema;

class ebay_versand_out
{
	const TABLE_NAME = 'ebay_versand_out';
	const kEbayCheckout = 'kEbayCheckout';
	const dDatum = 'dDatum';
	const cTrackingID = 'cTrackingID';
	const cInfo = 'cInfo';
	const cLogistiker = 'cLogistiker';
	const cURL = 'cURL';
	const COLUMN_NAMES = ['kEbayCheckout', 'dDatum', 'cTrackingID', 'cInfo', 'cLogistiker', 'cURL'];
	const COLUMN_TYPES = [
		'kEbayCheckout' => 'int',
		'dDatum' => 'varchar',
		'cTrackingID' => 'varchar',
		'cInfo' => 'varchar',
		'cLogistiker' => 'varchar',
		'cURL' => 'varchar',
	];

	/** @var int kEbayCheckout */
	public $kEbayCheckout;

	/** @var string dDatum */
	public $dDatum;

	/** @var string cTrackingID */
	public $cTrackingID;

	/** @var string cInfo */
	public $cInfo;

	/** @var string cLogistiker */
	public $cLogistiker;

	/** @var string cURL */
	public $cURL;
}
