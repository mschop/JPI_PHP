<?php

namespace App\Schema;

class ebay_mapitemSuchStrings
{
	const TABLE_NAME = 'ebay_mapitemSuchStrings';
	const kEbay_mapitemSuchString = 'kEbay_mapitemSuchString';
	const cSuchStringAnfang = 'cSuchStringAnfang';
	const cSuchStringEnde = 'cSuchStringEnde';
	const nSource = 'nSource';
	const COLUMN_NAMES = ['kEbay_mapitemSuchString', 'cSuchStringAnfang', 'cSuchStringEnde', 'nSource'];
	const COLUMN_TYPES = [
		'kEbay_mapitemSuchString' => 'int',
		'cSuchStringAnfang' => 'varchar',
		'cSuchStringEnde' => 'varchar',
		'nSource' => 'tinyint',
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
