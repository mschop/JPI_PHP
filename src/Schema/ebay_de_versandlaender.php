<?php

namespace App\Schema;

class ebay_de_versandlaender
{
	const TABLE_NAME = 'ebay_de_versandlaender';
	const kEbay_DE_Versandlaender = 'kEbay_DE_Versandlaender';
	const ShippingLocation = 'ShippingLocation';
	const Description = 'Description';
	const COLUMN_NAMES = ['kEbay_DE_Versandlaender', 'ShippingLocation', 'Description'];
	const COLUMN_TYPES = ['kEbay_DE_Versandlaender' => 'int', 'ShippingLocation' => 'varchar', 'Description' => 'varchar'];

	/** @var int kEbay_DE_Versandlaender */
	public $kEbay_DE_Versandlaender;

	/** @var string ShippingLocation */
	public $ShippingLocation;

	/** @var string Description */
	public $Description;
}
