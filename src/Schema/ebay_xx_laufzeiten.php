<?php

namespace App\Schema;

class ebay_xx_laufzeiten
{
	const TABLE_NAME = 'ebay_xx_laufzeiten';
	const SiteID = 'SiteID';
	const cType = 'cType';
	const cDuration = 'cDuration';

	/** @var int SiteID */
	public $SiteID;

	/** @var string cType */
	public $cType;

	/** @var string cDuration */
	public $cDuration;
}
