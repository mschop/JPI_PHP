<?php

namespace App\Db\Schema;

class ebay_de_versandlaender
{
	const TABLE_NAME = 'ebay_de_versandlaender';
	const kEbay_DE_Versandlaender = 'kEbay_DE_Versandlaender';
	const ShippingLocation = 'ShippingLocation';
	const Description = 'Description';
	const COLUMN_NAMES = ['kEbay_DE_Versandlaender', 'ShippingLocation', 'Description'];
	const COLUMN_DEFINITIONS = [
		'kEbay_DE_Versandlaender' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ShippingLocation' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
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

	/** @var int kEbay_DE_Versandlaender */
	public $kEbay_DE_Versandlaender;

	/** @var string ShippingLocation */
	public $ShippingLocation;

	/** @var string Description */
	public $Description;
}
