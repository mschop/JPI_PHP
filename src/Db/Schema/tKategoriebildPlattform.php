<?php

namespace App\Db\Schema;

class tKategoriebildPlattform
{
	const TABLE_NAME = 'tKategoriebildPlattform';
	const kKategoriebildPlattform = 'kKategoriebildPlattform';
	const kBild = 'kBild';
	const kKategorie = 'kKategorie';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const nNr = 'nNr';
	const nInet = 'nInet';
	const COLUMN_NAMES = ['kKategoriebildPlattform', 'kBild', 'kKategorie', 'kPlattform', 'kShop', 'nNr', 'nInet'];
	const COLUMN_DEFINITIONS = [
		'kKategoriebildPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBild' => [
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
		'kPlattform' => [
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
		'nNr' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nInet' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kKategoriebildPlattform */
	public $kKategoriebildPlattform;

	/** @var int kBild */
	public $kBild;

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;

	/** @var int nNr */
	public $nNr;

	/** @var int nInet */
	public $nInet;
}
