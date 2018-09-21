<?php

namespace App\Schema;

class tShopKundenGruppe
{
	const TABLE_NAME = 'tShopKundenGruppe';
	const kWebShop = 'kWebShop';
	const kKundenGruppe = 'kKundenGruppe';
	const nStandard = 'nStandard';
	const COLUMN_NAMES = ['kWebShop', 'kKundenGruppe', 'nStandard'];
	const COLUMN_TYPES = ['kWebShop' => 'int', 'kKundenGruppe' => 'int', 'nStandard' => 'tinyint'];

	/** @var int kWebShop */
	public $kWebShop;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int nStandard */
	public $nStandard;
}
