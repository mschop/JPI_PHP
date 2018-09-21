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
	const COLUMN_NAMES = ['SiteID', 'CategoryId', 'kName', 'kValue', 'kNameParent', 'kValueParent'];
	const COLUMN_TYPES = [
		'SiteID' => 'int',
		'CategoryId' => 'int',
		'kName' => 'int',
		'kValue' => 'int',
		'kNameParent' => 'int',
		'kValueParent' => 'int',
	];

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
