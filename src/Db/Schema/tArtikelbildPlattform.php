<?php

namespace App\Db\Schema;

class tArtikelbildPlattform
{
	const TABLE_NAME = 'tArtikelbildPlattform';
	const kArtikelbildPlattform = 'kArtikelbildPlattform';
	const kBild = 'kBild';
	const kArtikel = 'kArtikel';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const nNr = 'nNr';
	const nInet = 'nInet';
	const kEbayUser = 'kEbayUser';
	const cBildname = 'cBildname';
	const COLUMN_NAMES = [
		'kArtikelbildPlattform',
		'kBild',
		'kArtikel',
		'kPlattform',
		'kShop',
		'nNr',
		'nInet',
		'kEbayUser',
		'cBildname',
	];
	const COLUMN_DEFINITIONS = [
		'kArtikelbildPlattform' => [
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
		'kArtikel' => [
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
		'kEbayUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBildname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kArtikelbildPlattform */
	public $kArtikelbildPlattform;

	/** @var int kBild */
	public $kBild;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;

	/** @var int nNr */
	public $nNr;

	/** @var int nInet */
	public $nInet;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var string cBildname */
	public $cBildname;
}
