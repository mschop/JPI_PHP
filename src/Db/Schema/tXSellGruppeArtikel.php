<?php

namespace App\Db\Schema;

class tXSellGruppeArtikel
{
	const TABLE_NAME = 'tXSellGruppeArtikel';
	const kXSellGruppeArtikel = 'kXSellGruppeArtikel';
	const tXSellGruppe = 'tXSellGruppe';
	const kArtikel = 'kArtikel';
	const COLUMN_NAMES = ['kXSellGruppeArtikel', 'tXSellGruppe', 'kArtikel'];
	const COLUMN_DEFINITIONS = [
		'kXSellGruppeArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'tXSellGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kXSellGruppeArtikel */
	public $kXSellGruppeArtikel;

	/** @var int tXSellGruppe */
	public $tXSellGruppe;

	/** @var int kArtikel */
	public $kArtikel;
}
