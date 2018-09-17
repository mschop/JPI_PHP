<?php

namespace App\Schema;

class tShopKundenGruppe
{
	const TABLE_NAME = 'tShopKundenGruppe';
	const kWebShop = 'kWebShop';
	const kKundenGruppe = 'kKundenGruppe';
	const nStandard = 'nStandard';

	/** @var int kWebShop */
	public $kWebShop;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int nStandard */
	public $nStandard;
}
