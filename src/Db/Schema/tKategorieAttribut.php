<?php

namespace App\Db\Schema;

class tKategorieAttribut
{
	const TABLE_NAME = 'tKategorieAttribut';
	const kKategorieAttribut = 'kKategorieAttribut';
	const kKategorie = 'kKategorie';
	const kAttribut = 'kAttribut';
	const kShop = 'kShop';
	const COLUMN_NAMES = ['kKategorieAttribut', 'kKategorie', 'kAttribut', 'kShop'];
	const COLUMN_DEFINITIONS = [
		'kKategorieAttribut' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKategorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAttribut' => [
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
	];

	/** @var int kKategorieAttribut */
	public $kKategorieAttribut;

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kAttribut */
	public $kAttribut;

	/** @var int kShop */
	public $kShop;
}
