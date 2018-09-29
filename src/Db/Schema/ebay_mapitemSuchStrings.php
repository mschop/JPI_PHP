<?php

namespace App\Db\Schema;

class ebay_mapitemSuchStrings
{
	const TABLE_NAME = 'ebay_mapitemSuchStrings';
	const kEbay_mapitemSuchString = 'kEbay_mapitemSuchString';
	const cSuchStringAnfang = 'cSuchStringAnfang';
	const cSuchStringEnde = 'cSuchStringEnde';
	const nSource = 'nSource';
	const COLUMN_NAMES = ['kEbay_mapitemSuchString', 'cSuchStringAnfang', 'cSuchStringEnde', 'nSource'];
	const COLUMN_DEFINITIONS = [
		'kEbay_mapitemSuchString' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSuchStringAnfang' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cSuchStringEnde' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'nSource' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEbay_mapitemSuchString */
	public $kEbay_mapitemSuchString;

	/** @var string cSuchStringAnfang */
	public $cSuchStringAnfang;

	/** @var string cSuchStringEnde */
	public $cSuchStringEnde;

	/** @var int nSource */
	public $nSource;
}
