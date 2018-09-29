<?php

namespace App\Db\Schema;

class tArtikelUpload
{
	const TABLE_NAME = 'tArtikelUpload';
	const kArtikelUpload = 'kArtikelUpload';
	const kArtikel = 'kArtikel';
	const cDateiTyp = 'cDateiTyp';
	const nPflicht = 'nPflicht';
	const COLUMN_NAMES = ['kArtikelUpload', 'kArtikel', 'cDateiTyp', 'nPflicht'];
	const COLUMN_DEFINITIONS = [
		'kArtikelUpload' => [
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDateiTyp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nPflicht' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kArtikelUpload */
	public $kArtikelUpload;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cDateiTyp */
	public $cDateiTyp;

	/** @var int nPflicht */
	public $nPflicht;
}
