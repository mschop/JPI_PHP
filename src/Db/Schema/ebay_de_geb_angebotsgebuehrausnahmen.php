<?php

namespace App\Db\Schema;

class ebay_de_geb_angebotsgebuehrausnahmen
{
	const TABLE_NAME = 'ebay_de_geb_angebotsgebuehrausnahmen';
	const kEbay_DE_Geb_AngebotsgebuehrAusnahmen = 'kEbay_DE_Geb_AngebotsgebuehrAusnahmen';
	const CategoryId = 'CategoryId';
	const nurFestpreis = 'nurFestpreis';
	const Gebuehr = 'Gebuehr';
	const COLUMN_NAMES = ['kEbay_DE_Geb_AngebotsgebuehrAusnahmen', 'CategoryId', 'nurFestpreis', 'Gebuehr'];
	const COLUMN_DEFINITIONS = [
		'kEbay_DE_Geb_AngebotsgebuehrAusnahmen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CategoryId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nurFestpreis' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Gebuehr' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEbay_DE_Geb_AngebotsgebuehrAusnahmen */
	public $kEbay_DE_Geb_AngebotsgebuehrAusnahmen;

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int nurFestpreis */
	public $nurFestpreis;

	/** @var string Gebuehr */
	public $Gebuehr;
}
