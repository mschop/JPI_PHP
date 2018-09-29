<?php

namespace App\Db\Schema;

class tPicVersand
{
	const TABLE_NAME = 'tPicVersand';
	const kArtikelBild = 'kArtikelBild';
	const kKategoriePict = 'kKategoriePict';
	const kEigenschaftWertPict = 'kEigenschaftWertPict';
	const kEA = 'kEA';
	const kShop = 'kShop';
	const dMod = 'dMod';
	const COLUMN_NAMES = ['kArtikelBild', 'kKategoriePict', 'kEigenschaftWertPict', 'kEA', 'kShop', 'dMod'];
	const COLUMN_DEFINITIONS = [
		'kArtikelBild' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKategoriePict' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEigenschaftWertPict' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEA' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dMod' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kArtikelBild */
	public $kArtikelBild;

	/** @var int kKategoriePict */
	public $kKategoriePict;

	/** @var int kEigenschaftWertPict */
	public $kEigenschaftWertPict;

	/** @var int kEA */
	public $kEA;

	/** @var int kShop */
	public $kShop;

	/** @var string dMod */
	public $dMod;
}
