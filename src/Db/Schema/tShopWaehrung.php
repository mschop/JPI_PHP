<?php

namespace App\Db\Schema;

class tShopWaehrung
{
	const TABLE_NAME = 'tShopWaehrung';
	const kWebShop = 'kWebShop';
	const kWaehrung = 'kWaehrung';
	const nStandard = 'nStandard';
	const COLUMN_NAMES = ['kWebShop', 'kWaehrung', 'nStandard'];
	const COLUMN_DEFINITIONS = [
		'kWebShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWaehrung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStandard' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWebShop */
	public $kWebShop;

	/** @var int kWaehrung */
	public $kWaehrung;

	/** @var int nStandard */
	public $nStandard;
}
