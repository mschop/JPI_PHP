<?php

namespace App\Db\Schema;

class tShopSprache
{
	const TABLE_NAME = 'tShopSprache';
	const kWebShop = 'kWebShop';
	const kSprache = 'kSprache';
	const nStandard = 'nStandard';
	const COLUMN_NAMES = ['kWebShop', 'kSprache', 'nStandard'];
	const COLUMN_DEFINITIONS = [
		'kWebShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
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

	/** @var int kSprache */
	public $kSprache;

	/** @var int nStandard */
	public $nStandard;
}
