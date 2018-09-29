<?php

namespace App\Db\Schema;

class ebay_xx_rueckgabe
{
	const TABLE_NAME = 'ebay_xx_rueckgabe';
	const SiteID = 'SiteID';
	const cType = 'cType';
	const cOption = 'cOption';
	const cDescription = 'cDescription';
	const COLUMN_NAMES = ['SiteID', 'cType', 'cOption', 'cDescription'];
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
		'cOption' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cDescription' => [
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

	/** @var string cType */
	public $cType;

	/** @var string cOption */
	public $cOption;

	/** @var string cDescription */
	public $cDescription;
}
