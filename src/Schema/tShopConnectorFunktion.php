<?php

namespace App\Schema;

class tShopConnectorFunktion
{
	const TABLE_NAME = 'tShopConnectorFunktion';
	const kShop = 'kShop';
	const nTyp = 'nTyp';
	const COLUMN_NAMES = ['kShop', 'nTyp'];
	const COLUMN_TYPES = ['kShop' => 'int', 'nTyp' => 'int'];

	/** @var int kShop */
	public $kShop;

	/** @var int nTyp */
	public $nTyp;
}
