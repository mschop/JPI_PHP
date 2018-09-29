<?php

namespace App\Db\Schema;

class tShopMappingKundengruppe
{
	const TABLE_NAME = 'tShopMappingKundengruppe';
	const kKundengruppe = 'kKundengruppe';
	const kShop = 'kShop';
	const cPKShop = 'cPKShop';
	const cNameShop = 'cNameShop';
	const COLUMN_NAMES = ['kKundengruppe', 'kShop', 'cPKShop', 'cNameShop'];
	const COLUMN_DEFINITIONS = [
		'kKundengruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPKShop' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cNameShop' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kKundengruppe */
	public $kKundengruppe;

	/** @var int kShop */
	public $kShop;

	/** @var string cPKShop */
	public $cPKShop;

	/** @var string cNameShop */
	public $cNameShop;
}
