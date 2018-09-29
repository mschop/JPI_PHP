<?php

namespace App\Db\Schema;

class tHerstellerBildPlattform
{
	const TABLE_NAME = 'tHerstellerBildPlattform';
	const kHerstellerBildPlattform = 'kHerstellerBildPlattform';
	const kHersteller = 'kHersteller';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const kBild = 'kBild';
	const nInet = 'nInet';
	const COLUMN_NAMES = ['kHerstellerBildPlattform', 'kHersteller', 'kPlattform', 'kShop', 'kBild', 'nInet'];
	const COLUMN_DEFINITIONS = [
		'kHerstellerBildPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kHersteller' => [
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
	];

	/** @var int kHerstellerBildPlattform */
	public $kHerstellerBildPlattform;

	/** @var int kHersteller */
	public $kHersteller;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;

	/** @var int kBild */
	public $kBild;

	/** @var int nInet */
	public $nInet;
}
