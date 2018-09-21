<?php

namespace App\Schema;

class tShopWaehrung
{
	const TABLE_NAME = 'tShopWaehrung';
	const kWebShop = 'kWebShop';
	const kWaehrung = 'kWaehrung';
	const nStandard = 'nStandard';
	const COLUMN_NAMES = ['kWebShop', 'kWaehrung', 'nStandard'];
	const COLUMN_TYPES = ['kWebShop' => 'int', 'kWaehrung' => 'int', 'nStandard' => 'tinyint'];

	/** @var int kWebShop */
	public $kWebShop;

	/** @var int kWaehrung */
	public $kWaehrung;

	/** @var int nStandard */
	public $nStandard;
}
