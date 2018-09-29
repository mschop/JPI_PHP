<?php

namespace App\Db\Schema;

class tKategorieShop
{
	const TABLE_NAME = 'tKategorieShop';
	const kKategorie = 'kKategorie';
	const kShop = 'kShop';
	const cInet = 'cInet';
	const cDelInet = 'cDelInet';
	const nInBearbeitung = 'nInBearbeitung';
	const COLUMN_NAMES = ['kKategorie', 'kShop', 'cInet', 'cDelInet', 'nInBearbeitung'];
	const COLUMN_DEFINITIONS = [
		'kKategorie' => [
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
		'cInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cDelInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'nInBearbeitung' => [
			'type' => 'bit',
			'phpType' => 'boolean',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kShop */
	public $kShop;

	/** @var string cInet */
	public $cInet;

	/** @var string cDelInet */
	public $cDelInet;

	/** @var boolean nInBearbeitung */
	public $nInBearbeitung;
}
