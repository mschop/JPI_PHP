<?php

namespace App\Db\Schema;

class ebay_xx_bearbeitungszeiten
{
	const TABLE_NAME = 'ebay_xx_bearbeitungszeiten';
	const SiteID = 'SiteID';
	const cDispatchTime = 'cDispatchTime';
	const COLUMN_NAMES = ['SiteID', 'cDispatchTime'];
	const COLUMN_DEFINITIONS = [
		'SiteID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDispatchTime' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int SiteID */
	public $SiteID;

	/** @var string cDispatchTime */
	public $cDispatchTime;
}
