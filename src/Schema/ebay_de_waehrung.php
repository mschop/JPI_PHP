<?php

namespace App\Schema;

class ebay_de_waehrung
{
	const TABLE_NAME = 'ebay_de_waehrung';
	const Currency = 'Currency';
	const Description = 'Description';
	const COLUMN_NAMES = ['Currency', 'Description'];
	const COLUMN_TYPES = ['Currency' => 'varchar', 'Description' => 'varchar'];

	/** @var string Currency */
	public $Currency;

	/** @var string Description */
	public $Description;
}
