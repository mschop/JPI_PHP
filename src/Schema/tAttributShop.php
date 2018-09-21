<?php

namespace App\Schema;

class tAttributShop
{
	const TABLE_NAME = 'tAttributShop';
	const kAttribut = 'kAttribut';
	const kShop = 'kShop';
	const COLUMN_NAMES = ['kAttribut', 'kShop'];
	const COLUMN_TYPES = ['kAttribut' => 'int', 'kShop' => 'int'];

	/** @var int kAttribut */
	public $kAttribut;

	/** @var int kShop */
	public $kShop;
}
