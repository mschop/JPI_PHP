<?php

namespace App\Schema;

class tShopWaehrung
{
	const TABLE_NAME = 'tShopWaehrung';
	const kWebShop = 'kWebShop';
	const kWaehrung = 'kWaehrung';
	const nStandard = 'nStandard';

	/** @var int kWebShop */
	public $kWebShop;

	/** @var int kWaehrung */
	public $kWaehrung;

	/** @var int nStandard */
	public $nStandard;
}
