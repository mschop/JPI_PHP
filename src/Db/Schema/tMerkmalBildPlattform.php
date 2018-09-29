<?php

namespace App\Db\Schema;

class tMerkmalBildPlattform
{
	const TABLE_NAME = 'tMerkmalBildPlattform';
	const kMerkmalBildPlattform = 'kMerkmalBildPlattform';
	const kMerkmal = 'kMerkmal';
	const kBild = 'kBild';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const nInet = 'nInet';
	const COLUMN_NAMES = ['kMerkmalBildPlattform', 'kMerkmal', 'kBild', 'kPlattform', 'kShop', 'nInet'];
	const COLUMN_DEFINITIONS = [
		'kMerkmalBildPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMerkmal' => [
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

	/** @var int kMerkmalBildPlattform */
	public $kMerkmalBildPlattform;

	/** @var int kMerkmal */
	public $kMerkmal;

	/** @var int kBild */
	public $kBild;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;

	/** @var int nInet */
	public $nInet;
}
