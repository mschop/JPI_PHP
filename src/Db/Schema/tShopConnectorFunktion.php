<?php

namespace App\Db\Schema;

class tShopConnectorFunktion
{
	const TABLE_NAME = 'tShopConnectorFunktion';
	const kShop = 'kShop';
	const nTyp = 'nTyp';
	const COLUMN_NAMES = ['kShop', 'nTyp'];
	const COLUMN_DEFINITIONS = [
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kShop */
	public $kShop;

	/** @var int nTyp */
	public $nTyp;
}
