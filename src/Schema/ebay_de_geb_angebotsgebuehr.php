<?php

namespace App\Schema;

class ebay_de_geb_angebotsgebuehr
{
	const TABLE_NAME = 'ebay_de_geb_angebotsgebuehr';
	const kEbay_DE_Geb_Angebotsgebuehr = 'kEbay_DE_Geb_Angebotsgebuehr';
	const PreisMin = 'PreisMin';
	const PreisMax = 'PreisMax';
	const Gebuehr = 'Gebuehr';
	const COLUMN_NAMES = ['kEbay_DE_Geb_Angebotsgebuehr', 'PreisMin', 'PreisMax', 'Gebuehr'];
	const COLUMN_TYPES = [
		'kEbay_DE_Geb_Angebotsgebuehr' => 'int',
		'PreisMin' => 'decimal',
		'PreisMax' => 'decimal',
		'Gebuehr' => 'decimal',
	];

	/** @var int kEbay_DE_Geb_Angebotsgebuehr */
	public $kEbay_DE_Geb_Angebotsgebuehr;

	/** @var string PreisMin */
	public $PreisMin;

	/** @var string PreisMax */
	public $PreisMax;

	/** @var string Gebuehr */
	public $Gebuehr;
}
