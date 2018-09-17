<?php

namespace App\Schema;

class tShopMappingKundengruppe
{
	const TABLE_NAME = 'tShopMappingKundengruppe';
	const kKundengruppe = 'kKundengruppe';
	const kShop = 'kShop';
	const cPKShop = 'cPKShop';
	const cNameShop = 'cNameShop';

	/** @var int kKundengruppe */
	public $kKundengruppe;

	/** @var int kShop */
	public $kShop;

	/** @var string cPKShop */
	public $cPKShop;

	/** @var string cNameShop */
	public $cNameShop;
}
