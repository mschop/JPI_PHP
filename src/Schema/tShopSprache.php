<?php

namespace App\Schema;

class tShopSprache
{
	const TABLE_NAME = 'tShopSprache';
	const kWebShop = 'kWebShop';
	const kSprache = 'kSprache';
	const nStandard = 'nStandard';
	const COLUMN_NAMES = ['kWebShop', 'kSprache', 'nStandard'];
	const COLUMN_TYPES = ['kWebShop' => 'int', 'kSprache' => 'int', 'nStandard' => 'tinyint'];

	/** @var int kWebShop */
	public $kWebShop;

	/** @var int kSprache */
	public $kSprache;

	/** @var int nStandard */
	public $nStandard;
}
