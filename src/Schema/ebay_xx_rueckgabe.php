<?php

namespace App\Schema;

class ebay_xx_rueckgabe
{
	const TABLE_NAME = 'ebay_xx_rueckgabe';
	const SiteID = 'SiteID';
	const cType = 'cType';
	const cOption = 'cOption';
	const cDescription = 'cDescription';

	/** @var int SiteID */
	public $SiteID;

	/** @var string cType */
	public $cType;

	/** @var string cOption */
	public $cOption;

	/** @var string cDescription */
	public $cDescription;
}
