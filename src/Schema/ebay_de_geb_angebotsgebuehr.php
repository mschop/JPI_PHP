<?php

namespace App\Schema;

class ebay_de_geb_angebotsgebuehr
{
	const TABLE_NAME = 'ebay_de_geb_angebotsgebuehr';
	const kEbay_DE_Geb_Angebotsgebuehr = 'kEbay_DE_Geb_Angebotsgebuehr';
	const PreisMin = 'PreisMin';
	const PreisMax = 'PreisMax';
	const Gebuehr = 'Gebuehr';

	/** @var int kEbay_DE_Geb_Angebotsgebuehr */
	public $kEbay_DE_Geb_Angebotsgebuehr;

	/** @var string PreisMin */
	public $PreisMin;

	/** @var string PreisMax */
	public $PreisMax;

	/** @var string Gebuehr */
	public $Gebuehr;
}