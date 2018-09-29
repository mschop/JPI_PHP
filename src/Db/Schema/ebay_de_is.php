<?php

namespace App\Db\Schema;

class ebay_de_is
{
	const TABLE_NAME = 'ebay_de_is';
	const CategoryId = 'CategoryId';
	const kName = 'kName';
	const cHelpText = 'cHelpText';
	const cHelpURL = 'cHelpURL';
	const nSelectionMode = 'nSelectionMode';
	const nMaxValues = 'nMaxValues';
	const nMinValues = 'nMinValues';
	const nSort = 'nSort';
	const COLUMN_NAMES = [
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
		'CategoryId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kName' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHelpText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cHelpURL' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSelectionMode' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMaxValues' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMinValues' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

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
