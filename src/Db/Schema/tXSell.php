<?php

namespace App\Db\Schema;

class tXSell
{
	const TABLE_NAME = 'tXSell';
	const kXSell = 'kXSell';
	const kArtikel = 'kArtikel';
	const kXSellArtikel = 'kXSellArtikel';
	const kXSellGruppe = 'kXSellGruppe';
	const nEigenesFeld = 'nEigenesFeld';
	const COLUMN_NAMES = ['kXSell', 'kArtikel', 'kXSellArtikel', 'kXSellGruppe', 'nEigenesFeld'];
	const COLUMN_DEFINITIONS = [
		'kXSell' => [
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
		'kXSellArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kXSellGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEigenesFeld' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kXSell */
	public $kXSell;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kXSellArtikel */
	public $kXSellArtikel;

	/** @var int kXSellGruppe */
	public $kXSellGruppe;

	/** @var int nEigenesFeld */
	public $nEigenesFeld;
}
