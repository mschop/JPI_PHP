<?php

namespace App\Db\Schema;

class tMerkmalwertBildPlattform
{
	const TABLE_NAME = 'tMerkmalwertBildPlattform';
	const kMerkmalwertBildPlattform = 'kMerkmalwertBildPlattform';
	const kMerkmalwert = 'kMerkmalwert';
	const kBild = 'kBild';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const nInet = 'nInet';
	const COLUMN_NAMES = ['kMerkmalwertBildPlattform', 'kMerkmalwert', 'kBild', 'kPlattform', 'kShop', 'nInet'];
	const COLUMN_DEFINITIONS = [
		'kMerkmalwertBildPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMerkmalwert' => [
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
		'nInet' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kMerkmalwertBildPlattform */
	public $kMerkmalwertBildPlattform;

	/** @var int kMerkmalwert */
	public $kMerkmalwert;

	/** @var int kBild */
	public $kBild;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;

	/** @var int nInet */
	public $nInet;
}
