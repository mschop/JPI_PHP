<?php

namespace App\Db\Schema;

class ebay_xx_isglobalname
{
	const TABLE_NAME = 'ebay_xx_isglobalname';
	const kName = 'kName';
	const cName = 'cName';
	const COLUMN_NAMES = ['kName', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kName' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
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
