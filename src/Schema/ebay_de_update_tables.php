<?php

namespace App\Schema;

class ebay_de_update_tables
{
	const TABLE_NAME = 'ebay_de_update_tables';
	const kTable = 'kTable';
	const cTable = 'cTable';
	const COLUMN_NAMES = ['kTable', 'cTable'];
	const COLUMN_TYPES = ['kTable' => 'tinyint', 'cTable' => 'varchar'];

	/** @var int kTable */
	public $kTable;

	/** @var string cTable */
	public $cTable;
}
