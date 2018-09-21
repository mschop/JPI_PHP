<?php

namespace App\Schema;

class ebay_de_laender
{
	const TABLE_NAME = 'ebay_de_laender';
	const Country = 'Country';
	const Description = 'Description';
	const COLUMN_NAMES = ['Country', 'Description'];
	const COLUMN_TYPES = ['Country' => 'varchar', 'Description' => 'varchar'];

	/** @var string Country */
	public $Country;

	/** @var string Description */
	public $Description;
}
