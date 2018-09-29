<?php

namespace App\Db\Schema;

class tartikelkonfiggruppe
{
	const TABLE_NAME = 'tartikelkonfiggruppe';
	const kArtikelkonfiggruppe = 'kArtikelkonfiggruppe';
	const kArtikel = 'kArtikel';
	const kKonfiggruppe = 'kKonfiggruppe';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kArtikelkonfiggruppe', 'kArtikel', 'kKonfiggruppe', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kArtikelkonfiggruppe' => [
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
		'kKonfiggruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kArtikelkonfiggruppe */
	public $kArtikelkonfiggruppe;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kKonfiggruppe */
	public $kKonfiggruppe;

	/** @var int nSort */
	public $nSort;
}
