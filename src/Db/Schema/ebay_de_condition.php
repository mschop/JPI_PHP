<?php

namespace App\Db\Schema;

class ebay_de_condition
{
	const TABLE_NAME = 'ebay_de_condition';
	const ID = 'ID';
	const DisplayName = 'DisplayName';
	const COLUMN_NAMES = ['ID', 'DisplayName'];
	const COLUMN_DEFINITIONS = [
		'ID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'DisplayName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int ID */
	public $ID;

	/** @var string DisplayName */
	public $DisplayName;
}
