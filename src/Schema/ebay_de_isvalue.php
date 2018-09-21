<?php

namespace App\Schema;

class ebay_de_isvalue
{
	const TABLE_NAME = 'ebay_de_isvalue';
	const CategoryId = 'CategoryId';
	const kName = 'kName';
	const kValue = 'kValue';
	const COLUMN_NAMES = ['CategoryId', 'kName', 'kValue'];
	const COLUMN_TYPES = ['CategoryId' => 'int', 'kName' => 'int', 'kValue' => 'int'];

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int kName */
	public $kName;

	/** @var int kValue */
	public $kValue;
}
