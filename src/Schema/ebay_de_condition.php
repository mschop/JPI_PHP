<?php

namespace App\Schema;

class ebay_de_condition
{
	const TABLE_NAME = 'ebay_de_condition';
	const ID = 'ID';
	const DisplayName = 'DisplayName';
	const COLUMN_NAMES = ['ID', 'DisplayName'];
	const COLUMN_TYPES = ['ID' => 'int', 'DisplayName' => 'varchar'];

	/** @var int ID */
	public $ID;

	/** @var string DisplayName */
	public $DisplayName;
}
