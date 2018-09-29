<?php

namespace App\Db\Schema;

class ebay_de_waehrung
{
	const TABLE_NAME = 'ebay_de_waehrung';
	const Currency = 'Currency';
	const Description = 'Description';
	const COLUMN_NAMES = ['Currency', 'Description'];
	const COLUMN_DEFINITIONS = [
		'Currency' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'Description' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string Currency */
	public $Currency;

	/** @var string Description */
	public $Description;
}
