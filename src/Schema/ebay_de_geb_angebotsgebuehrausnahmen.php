<?php

namespace App\Schema;

class ebay_de_geb_angebotsgebuehrausnahmen
{
	const TABLE_NAME = 'ebay_de_geb_angebotsgebuehrausnahmen';
	const kEbay_DE_Geb_AngebotsgebuehrAusnahmen = 'kEbay_DE_Geb_AngebotsgebuehrAusnahmen';
	const CategoryId = 'CategoryId';
	const nurFestpreis = 'nurFestpreis';
	const Gebuehr = 'Gebuehr';

	/** @var int kEbay_DE_Geb_AngebotsgebuehrAusnahmen */
	public $kEbay_DE_Geb_AngebotsgebuehrAusnahmen;

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int nurFestpreis */
	public $nurFestpreis;

	/** @var string Gebuehr */
	public $Gebuehr;
}
