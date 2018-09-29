<?php

namespace App\Db\Schema;

class ebay_synchartikel
{
	const TABLE_NAME = 'ebay_synchartikel';
	const kArtikel = 'kArtikel';
	const nDay = 'nDay';
	const dSent = 'dSent';
	const COLUMN_NAMES = ['kArtikel', 'nDay', 'dSent'];
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDay' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dSent' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int nDay */
	public $nDay;

	/** @var string dSent */
	public $dSent;
}
