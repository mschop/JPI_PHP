<?php

namespace App\Schema;

class ebay_xx_condition
{
	const TABLE_NAME = 'ebay_xx_condition';
	const SiteID = 'SiteID';
	const ID = 'ID';
	const DisplayName = 'DisplayName';
	const COLUMN_NAMES = ['SiteID', 'ID', 'DisplayName'];
	const COLUMN_TYPES = ['SiteID' => 'int', 'ID' => 'int', 'DisplayName' => 'varchar'];

	/** @var int SiteID */
	public $SiteID;

	/** @var int ID */
	public $ID;

	/** @var string DisplayName */
	public $DisplayName;
}
