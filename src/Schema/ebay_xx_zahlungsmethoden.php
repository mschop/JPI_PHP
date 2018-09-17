<?php

namespace App\Schema;

class ebay_xx_zahlungsmethoden
{
	const TABLE_NAME = 'ebay_xx_zahlungsmethoden';
	const SiteID = 'SiteID';
	const PaymentOption = 'PaymentOption';
	const DisplayText = 'DisplayText';

	/** @var int SiteID */
	public $SiteID;

	/** @var string PaymentOption */
	public $PaymentOption;

	/** @var string DisplayText */
	public $DisplayText;
}
