<?php

namespace App\Db\Schema;

class ebay_de_geb_erweiterungen
{
	const TABLE_NAME = 'ebay_de_geb_erweiterungen';
	const kEbay_DE_Geb_Erweiterungen = 'kEbay_DE_Geb_Erweiterungen';
	const Enhancement = 'Enhancement';
	const mehrereArtikel = 'mehrereArtikel';
	const Gebuehr = 'Gebuehr';
	const COLUMN_NAMES = ['kEbay_DE_Geb_Erweiterungen', 'Enhancement', 'mehrereArtikel', 'Gebuehr'];
	const COLUMN_DEFINITIONS = [
		'kEbay_DE_Geb_Erweiterungen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Enhancement' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'mehrereArtikel' => [
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

	/** @var int kEbay_DE_Geb_Erweiterungen */
	public $kEbay_DE_Geb_Erweiterungen;

	/** @var string Enhancement */
	public $Enhancement;

	/** @var int mehrereArtikel */
	public $mehrereArtikel;

	/** @var string Gebuehr */
	public $Gebuehr;
}
