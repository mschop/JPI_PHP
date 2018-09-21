<?php

namespace App\Schema;

class ebay_xx_isglobalvalue
{
	const TABLE_NAME = 'ebay_xx_isglobalvalue';
	const kValue = 'kValue';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kValue', 'cValue'];
	const COLUMN_TYPES = ['kValue' => 'int', 'cValue' => 'varchar'];

	/** @var int kValue */
	public $kValue;

	/** @var string cValue */
	public $cValue;
}
