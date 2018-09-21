<?php

namespace App\Schema;

class ebay_mapitemArtikelZuordnungen
{
	const TABLE_NAME = 'ebay_mapitemArtikelZuordnungen';
	const ItemID = 'ItemID';
	const kArtikel = 'kArtikel';
	const COLUMN_NAMES = ['ItemID', 'kArtikel'];
	const COLUMN_TYPES = ['ItemID' => 'varchar', 'kArtikel' => 'int'];

	/** @var string ItemID */
	public $ItemID;

	/** @var int kArtikel */
	public $kArtikel;
}
