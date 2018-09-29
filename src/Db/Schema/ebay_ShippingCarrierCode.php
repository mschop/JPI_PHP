<?php

namespace App\Db\Schema;

class ebay_ShippingCarrierCode
{
	const TABLE_NAME = 'ebay_ShippingCarrierCode';
	const Description = 'Description';
	const Value = 'Value';
	const COLUMN_NAMES = ['Description', 'Value'];
	const COLUMN_DEFINITIONS = [
		'Description' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Value' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string Description */
	public $Description;

	/** @var string Value */
	public $Value;
}
