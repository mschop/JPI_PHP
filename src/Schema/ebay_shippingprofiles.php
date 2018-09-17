<?php

namespace App\Schema;

class ebay_shippingprofiles
{
	const TABLE_NAME = 'ebay_shippingprofiles';
	const kEbayBenutzer = 'kEbayBenutzer';
	const cProfilType = 'cProfilType';
	const DiscountProfileID = 'DiscountProfileID';
	const DiscountProfileName = 'DiscountProfileName';
	const SiteID = 'SiteID';

	/** @var int kEbayBenutzer */
	public $kEbayBenutzer;

	/** @var string cProfilType */
	public $cProfilType;

	/** @var string DiscountProfileID */
	public $DiscountProfileID;

	/** @var string DiscountProfileName */
	public $DiscountProfileName;

	/** @var int SiteID */
	public $SiteID;
}
