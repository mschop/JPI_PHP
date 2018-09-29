<?php

namespace App\Db\Schema;

class tArtikelAttribut
{
	const TABLE_NAME = 'tArtikelAttribut';
	const kArtikelAttribut = 'kArtikelAttribut';
	const kArtikel = 'kArtikel';
	const kAttribut = 'kAttribut';
	const kShop = 'kShop';
	const COLUMN_NAMES = ['kArtikelAttribut', 'kArtikel', 'kAttribut', 'kShop'];
	const COLUMN_DEFINITIONS = [
		'kArtikelAttribut' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
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

	/** @var int kArtikelAttribut */
	public $kArtikelAttribut;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kAttribut */
	public $kAttribut;

	/** @var int kShop */
	public $kShop;
}
