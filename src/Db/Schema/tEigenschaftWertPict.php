<?php

namespace App\Db\Schema;

class tEigenschaftWertPict
{
	const TABLE_NAME = 'tEigenschaftWertPict';
	const kEigenschaftWertPict = 'kEigenschaftWertPict';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kBild = 'kBild';
	const nInet = 'nInet';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const COLUMN_NAMES = ['kEigenschaftWertPict', 'kEigenschaftWert', 'kBild', 'nInet', 'kPlattform', 'kShop'];
	const COLUMN_DEFINITIONS = [
		'kEigenschaftWertPict' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEigenschaftWert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBild' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nInet' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPlattform' => [
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
	];

	/** @var int kEigenschaftWertPict */
	public $kEigenschaftWertPict;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kBild */
	public $kBild;

	/** @var int nInet */
	public $nInet;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;
}
