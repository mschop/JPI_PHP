<?php

namespace App\Db\Schema;

class ebay_de_laender
{
	const TABLE_NAME = 'ebay_de_laender';
	const Country = 'Country';
	const Description = 'Description';
	const COLUMN_NAMES = ['Country', 'Description'];
	const COLUMN_DEFINITIONS = [
		'Country' => [
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

	/** @var string Country */
	public $Country;

	/** @var string Description */
	public $Description;
}
