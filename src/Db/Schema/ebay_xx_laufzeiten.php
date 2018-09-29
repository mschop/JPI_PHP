<?php

namespace App\Db\Schema;

class ebay_xx_laufzeiten
{
	const TABLE_NAME = 'ebay_xx_laufzeiten';
	const SiteID = 'SiteID';
	const cType = 'cType';
	const cDuration = 'cDuration';
	const COLUMN_NAMES = ['SiteID', 'cType', 'cDuration'];
	const COLUMN_DEFINITIONS = [
		'SiteID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cDuration' => [
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

	/** @var string cType */
	public $cType;

	/** @var string cDuration */
	public $cDuration;
}
