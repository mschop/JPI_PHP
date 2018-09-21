<?php

namespace App\Schema;

class ebay_ShippingCarrierCode
{
	const TABLE_NAME = 'ebay_ShippingCarrierCode';
	const Description = 'Description';
	const Value = 'Value';
	const COLUMN_NAMES = ['Description', 'Value'];
	const COLUMN_TYPES = ['Description' => 'varchar', 'Value' => 'varchar'];

	/** @var string Description */
	public $Description;

	/** @var string Value */
	public $Value;
}
