<?php

namespace App\Schema;

class ebay_xx_bearbeitungszeiten
{
	const TABLE_NAME = 'ebay_xx_bearbeitungszeiten';
	const SiteID = 'SiteID';
	const cDispatchTime = 'cDispatchTime';
	const COLUMN_NAMES = ['SiteID', 'cDispatchTime'];
	const COLUMN_TYPES = ['SiteID' => 'int', 'cDispatchTime' => 'varchar'];

	/** @var int SiteID */
	public $SiteID;

	/** @var string cDispatchTime */
	public $cDispatchTime;
}
