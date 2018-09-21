<?php

namespace App\Schema;

class ebay_xx_laufzeiten
{
	const TABLE_NAME = 'ebay_xx_laufzeiten';
	const SiteID = 'SiteID';
	const cType = 'cType';
	const cDuration = 'cDuration';
	const COLUMN_NAMES = ['SiteID', 'cType', 'cDuration'];
	const COLUMN_TYPES = ['SiteID' => 'int', 'cType' => 'varchar', 'cDuration' => 'varchar'];

	/** @var int SiteID */
	public $SiteID;

	/** @var string cType */
	public $cType;

	/** @var string cDuration */
	public $cDuration;
}
