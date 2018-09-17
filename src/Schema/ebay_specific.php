<?php

namespace App\Schema;

class ebay_specific
{
	const TABLE_NAME = 'ebay_specific';
	const kItem = 'kItem';
	const cName = 'cName';
	const cValue = 'cValue';
	const nCustom = 'nCustom';

	/** @var int kItem */
	public $kItem;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;

	/** @var int nCustom */
	public $nCustom;
}
