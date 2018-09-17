<?php

namespace App\Schema;

class ebay_xx_isrelation
{
	const TABLE_NAME = 'ebay_xx_isrelation';
	const SiteID = 'SiteID';
	const CategoryId = 'CategoryId';
	const kName = 'kName';
	const kValue = 'kValue';
	const kNameParent = 'kNameParent';
	const kValueParent = 'kValueParent';

	/** @var int SiteID */
	public $SiteID;

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int kName */
	public $kName;

	/** @var int kValue */
	public $kValue;

	/** @var int kNameParent */
	public $kNameParent;

	/** @var int kValueParent */
	public $kValueParent;
}
