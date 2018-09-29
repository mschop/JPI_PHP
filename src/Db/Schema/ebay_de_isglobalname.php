<?php

namespace App\Db\Schema;

class ebay_de_isglobalname
{
	const TABLE_NAME = 'ebay_de_isglobalname';
	const kName = 'kName';
	const cName = 'cName';
	const COLUMN_NAMES = ['kName', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kName' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kName */
	public $kName;

	/** @var string cName */
	public $cName;
}
