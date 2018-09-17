<?php

namespace App\Schema;

class ebay_xx_versandlaender
{
	const TABLE_NAME = 'ebay_xx_versandlaender';
	const SiteID = 'SiteID';
	const ShippingLocation = 'ShippingLocation';
	const cDescription = 'cDescription';

	/** @var int SiteID */
	public $SiteID;

	/** @var string ShippingLocation */
	public $ShippingLocation;

	/** @var string cDescription */
	public $cDescription;
}
