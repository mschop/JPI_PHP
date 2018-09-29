<?php

namespace App\Db\Schema;

class ebay_de_geb_angebotsgebuehr
{
	const TABLE_NAME = 'ebay_de_geb_angebotsgebuehr';
	const kEbay_DE_Geb_Angebotsgebuehr = 'kEbay_DE_Geb_Angebotsgebuehr';
	const PreisMin = 'PreisMin';
	const PreisMax = 'PreisMax';
	const Gebuehr = 'Gebuehr';
	const COLUMN_NAMES = ['kEbay_DE_Geb_Angebotsgebuehr', 'PreisMin', 'PreisMax', 'Gebuehr'];
	const COLUMN_DEFINITIONS = [
		'kEbay_DE_Geb_Angebotsgebuehr' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'PreisMin' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'PreisMax' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
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

	/** @var int kEbay_DE_Geb_Angebotsgebuehr */
	public $kEbay_DE_Geb_Angebotsgebuehr;

	/** @var string PreisMin */
	public $PreisMin;

	/** @var string PreisMax */
	public $PreisMax;

	/** @var string Gebuehr */
	public $Gebuehr;
}
