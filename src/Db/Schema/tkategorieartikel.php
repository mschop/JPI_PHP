<?php

namespace App\Db\Schema;

class tkategorieartikel
{
	const TABLE_NAME = 'tkategorieartikel';
	const kKategorieArtikel = 'kKategorieArtikel';
	const kArtikel = 'kArtikel';
	const kKategorie = 'kKategorie';
	const COLUMN_NAMES = ['kKategorieArtikel', 'kArtikel', 'kKategorie'];
	const COLUMN_DEFINITIONS = [
		'kKategorieArtikel' => [
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
		'kKategorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kKategorieArtikel */
	public $kKategorieArtikel;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kKategorie */
	public $kKategorie;
}
