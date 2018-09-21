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
	const COLUMN_NAMES = ['kEbayBenutzer', 'cProfilType', 'DiscountProfileID', 'DiscountProfileName', 'SiteID'];
	const COLUMN_TYPES = [
		'kEbayBenutzer' => 'int',
		'cProfilType' => 'char',
		'DiscountProfileID' => 'varchar',
		'DiscountProfileName' => 'varchar',
		'SiteID' => 'int',
	];

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
