<?php

namespace App\Db\Schema;

class tArtikelZustand
{
	const TABLE_NAME = 'tArtikelZustand';
	const kArtikelZustand = 'kArtikelZustand';
	const kHauptartikel = 'kHauptartikel';
	const kZustandArtikel = 'kZustandArtikel';
	const COLUMN_NAMES = ['kArtikelZustand', 'kHauptartikel', 'kZustandArtikel'];
	const COLUMN_DEFINITIONS = [
		'kArtikelZustand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kHauptartikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kZustandArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kArtikelZustand */
	public $kArtikelZustand;

	/** @var int kHauptartikel */
	public $kHauptartikel;

	/** @var int kZustandArtikel */
	public $kZustandArtikel;
}
