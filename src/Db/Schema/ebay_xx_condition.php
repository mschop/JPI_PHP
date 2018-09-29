<?php

namespace App\Db\Schema;

class ebay_xx_condition
{
	const TABLE_NAME = 'ebay_xx_condition';
	const SiteID = 'SiteID';
	const ID = 'ID';
	const DisplayName = 'DisplayName';
	const COLUMN_NAMES = ['SiteID', 'ID', 'DisplayName'];
	const COLUMN_DEFINITIONS = [
		'SiteID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'DisplayName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int SiteID */
	public $SiteID;

	/** @var int ID */
	public $ID;

	/** @var string DisplayName */
	public $DisplayName;
}
