<?php

namespace App\Schema;

class ebay_xx_isvalue
{
	const TABLE_NAME = 'ebay_xx_isvalue';
	const SiteID = 'SiteID';
	const CategoryId = 'CategoryId';
	const kName = 'kName';
	const kValue = 'kValue';

	/** @var int SiteID */
	public $SiteID;

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int kName */
	public $kName;

	/** @var int kValue */
	public $kValue;
}
