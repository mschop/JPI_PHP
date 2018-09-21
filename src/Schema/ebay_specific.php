<?php

namespace App\Schema;

class ebay_specific
{
	const TABLE_NAME = 'ebay_specific';
	const kItem = 'kItem';
	const cName = 'cName';
	const cValue = 'cValue';
	const nCustom = 'nCustom';
	const COLUMN_NAMES = ['kItem', 'cName', 'cValue', 'nCustom'];
	const COLUMN_TYPES = ['kItem' => 'int', 'cName' => 'varchar', 'cValue' => 'varchar', 'nCustom' => 'tinyint'];

	/** @var int kItem */
	public $kItem;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;

	/** @var int nCustom */
	public $nCustom;
}
