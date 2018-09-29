<?php

namespace App\Db\Schema;

class tMedienDatei
{
	const TABLE_NAME = 'tMedienDatei';
	const kMedienDatei = 'kMedienDatei';
	const kArtikel = 'kArtikel';
	const cPfad = 'cPfad';
	const cURL = 'cURL';
	const cKategorie = 'cKategorie';
	const cTyp = 'cTyp';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kMedienDatei', 'kArtikel', 'cPfad', 'cURL', 'cKategorie', 'cTyp', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kMedienDatei' => [
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
		'cPfad' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2000,
			'characterSetName' => 'iso_1',
		],
		'cURL' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2000,
			'characterSetName' => 'iso_1',
		],
		'cKategorie' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cTyp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSort' => [
			'type' => 'smallint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kMedienDatei */
	public $kMedienDatei;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cPfad */
	public $cPfad;

	/** @var string cURL */
	public $cURL;

	/** @var string cKategorie */
	public $cKategorie;

	/** @var string cTyp */
	public $cTyp;

	/** @var int nSort */
	public $nSort;
}
