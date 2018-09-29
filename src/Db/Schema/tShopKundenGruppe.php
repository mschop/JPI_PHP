<?php

namespace App\Db\Schema;

class tShopKundenGruppe
{
	const TABLE_NAME = 'tShopKundenGruppe';
	const kWebShop = 'kWebShop';
	const kKundenGruppe = 'kKundenGruppe';
	const nStandard = 'nStandard';
	const COLUMN_NAMES = ['kWebShop', 'kKundenGruppe', 'nStandard'];
	const COLUMN_DEFINITIONS = [
		'kWebShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundenGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStandard' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWebShop */
	public $kWebShop;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int nStandard */
	public $nStandard;
}
