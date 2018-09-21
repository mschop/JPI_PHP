<?php

namespace App\Schema;

class ebay_xx_isvalue
{
	const TABLE_NAME = 'ebay_xx_isvalue';
	const SiteID = 'SiteID';
	const CategoryId = 'CategoryId';
	const kName = 'kName';
	const kValue = 'kValue';
	const COLUMN_NAMES = ['SiteID', 'CategoryId', 'kName', 'kValue'];
	const COLUMN_TYPES = ['SiteID' => 'int', 'CategoryId' => 'int', 'kName' => 'int', 'kValue' => 'int'];

	/** @var int SiteID */
	public $SiteID;

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int kName */
	public $kName;

	/** @var int kValue */
	public $kValue;
}
