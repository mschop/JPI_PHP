<?php

namespace App\Db\Schema;

class ebay_de_update_tables
{
	const TABLE_NAME = 'ebay_de_update_tables';
	const kTable = 'kTable';
	const cTable = 'cTable';
	const COLUMN_NAMES = ['kTable', 'cTable'];
	const COLUMN_DEFINITIONS = [
		'kTable' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTable' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kTable */
	public $kTable;

	/** @var string cTable */
	public $cTable;
}
