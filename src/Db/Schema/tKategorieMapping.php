<?php

namespace App\Db\Schema;

class tKategorieMapping
{
	const TABLE_NAME = 'tKategorieMapping';
	const kKategorieMapping = 'kKategorieMapping';
	const kKategorie = 'kKategorie';
	const kFremdKategorie = 'kFremdKategorie';
	const nPlattform = 'nPlattform';
	const COLUMN_NAMES = ['kKategorieMapping', 'kKategorie', 'kFremdKategorie', 'nPlattform'];
	const COLUMN_DEFINITIONS = [
		'kKategorieMapping' => [
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
		'kFremdKategorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kKategorieMapping */
	public $kKategorieMapping;

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kFremdKategorie */
	public $kFremdKategorie;

	/** @var int nPlattform */
	public $nPlattform;
}
