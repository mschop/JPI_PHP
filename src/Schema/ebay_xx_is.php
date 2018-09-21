<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'SiteID' => 'int',
		'CategoryId' => 'int',
		'kName' => 'int',
		'cHelpText' => 'varchar',
		'cHelpURL' => 'varchar',
		'nSelectionMode' => 'tinyint',
		'nMaxValues' => 'tinyint',
		'nMinValues' => 'tinyint',
		'nSort' => 'tinyint',
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
