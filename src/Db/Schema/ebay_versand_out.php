<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kEbayCheckout' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dDatum' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 12,
			'characterSetName' => 'iso_1',
		],
		'cTrackingID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cInfo' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLogistiker' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cURL' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 512,
			'characterSetName' => 'iso_1',
		],
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
