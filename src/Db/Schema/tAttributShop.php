<?php

namespace App\Db\Schema;

class tAttributShop
{
	const TABLE_NAME = 'tAttributShop';
	const kAttribut = 'kAttribut';
	const kShop = 'kShop';
	const COLUMN_NAMES = ['kAttribut', 'kShop'];
	const COLUMN_DEFINITIONS = [
		'kAttribut' => [
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
	];

	/** @var int kAttribut */
	public $kAttribut;

	/** @var int kShop */
	public $kShop;
}
