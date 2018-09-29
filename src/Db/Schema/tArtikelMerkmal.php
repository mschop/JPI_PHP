<?php

namespace App\Db\Schema;

class tArtikelMerkmal
{
	const TABLE_NAME = 'tArtikelMerkmal';
	const kMerkmal = 'kMerkmal';
	const kMerkmalWert = 'kMerkmalWert';
	const kArtikel = 'kArtikel';
	const COLUMN_NAMES = ['kMerkmal', 'kMerkmalWert', 'kArtikel'];
	const COLUMN_DEFINITIONS = [
		'kMerkmal' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMerkmalWert' => [
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
	];

	/** @var int kMerkmal */
	public $kMerkmal;

	/** @var int kMerkmalWert */
	public $kMerkmalWert;

	/** @var int kArtikel */
	public $kArtikel;
}
