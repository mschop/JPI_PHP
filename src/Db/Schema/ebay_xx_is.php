<?php

namespace App\Db\Schema;

class ebay_xx_is
{
	const TABLE_NAME = 'ebay_xx_is';
	const SiteID = 'SiteID';
	const CategoryId = 'CategoryId';
	const kName = 'kName';
	const cHelpText = 'cHelpText';
	const cHelpURL = 'cHelpURL';
	const nSelectionMode = 'nSelectionMode';
	const nMaxValues = 'nMaxValues';
	const nMinValues = 'nMinValues';
	const nSort = 'nSort';
	const COLUMN_NAMES = [
		'SiteID',
		'CategoryId',
		'kName',
		'cHelpText',
		'cHelpURL',
		'nSelectionMode',
		'nMaxValues',
		'nMinValues',
		'nSort',
	];
	const COLUMN_DEFINITIONS = [
		'SiteID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CategoryId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kName' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHelpText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cHelpURL' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSelectionMode' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMaxValues' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMinValues' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int SiteID */
	public $SiteID;

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int kName */
	public $kName;

	/** @var string cHelpText */
	public $cHelpText;

	/** @var string cHelpURL */
	public $cHelpURL;

	/** @var int nSelectionMode */
	public $nSelectionMode;

	/** @var int nMaxValues */
	public $nMaxValues;

	/** @var int nMinValues */
	public $nMinValues;

	/** @var int nSort */
	public $nSort;
}
