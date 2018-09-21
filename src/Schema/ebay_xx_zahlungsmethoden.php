<?php

namespace App\Schema;

class ebay_xx_zahlungsmethoden
{
	const TABLE_NAME = 'ebay_xx_zahlungsmethoden';
	const SiteID = 'SiteID';
	const PaymentOption = 'PaymentOption';
	const DisplayText = 'DisplayText';
	const COLUMN_NAMES = ['SiteID', 'PaymentOption', 'DisplayText'];
	const COLUMN_TYPES = ['SiteID' => 'int', 'PaymentOption' => 'varchar', 'DisplayText' => 'varchar'];

	/** @var int SiteID */
	public $SiteID;

	/** @var string PaymentOption */
	public $PaymentOption;

	/** @var string DisplayText */
	public $DisplayText;
}
