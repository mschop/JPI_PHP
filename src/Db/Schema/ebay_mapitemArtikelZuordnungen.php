<?php

namespace App\Db\Schema;

class ebay_mapitemArtikelZuordnungen
{
	const TABLE_NAME = 'ebay_mapitemArtikelZuordnungen';
	const ItemID = 'ItemID';
	const kArtikel = 'kArtikel';
	const COLUMN_NAMES = ['ItemID', 'kArtikel'];
	const COLUMN_DEFINITIONS = [
		'ItemID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string ItemID */
	public $ItemID;

	/** @var int kArtikel */
	public $kArtikel;
}
