<?php

namespace App\Schema;

class ebay_de_versandlaender
{
	const TABLE_NAME = 'ebay_de_versandlaender';
	const kEbay_DE_Versandlaender = 'kEbay_DE_Versandlaender';
	const ShippingLocation = 'ShippingLocation';
	const Description = 'Description';

	/** @var int kEbay_DE_Versandlaender */
	public $kEbay_DE_Versandlaender;

	/** @var string ShippingLocation */
	public $ShippingLocation;

	/** @var string Description */
	public $Description;
}
