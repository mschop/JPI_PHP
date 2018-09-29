<?php

namespace App\Db\Schema;

class ebay_xx_zahlungsmethoden
{
	const TABLE_NAME = 'ebay_xx_zahlungsmethoden';
	const SiteID = 'SiteID';
	const PaymentOption = 'PaymentOption';
	const DisplayText = 'DisplayText';
	const COLUMN_NAMES = ['SiteID', 'PaymentOption', 'DisplayText'];
	const COLUMN_DEFINITIONS = [
		'SiteID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'PaymentOption' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'DisplayText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int SiteID */
	public $SiteID;

	/** @var string PaymentOption */
	public $PaymentOption;

	/** @var string DisplayText */
	public $DisplayText;
}
