<?php

namespace App\Db\Schema;

class tSonderpreise
{
	const TABLE_NAME = 'tSonderpreise';
	const kArtikelSonderpreis = 'kArtikelSonderpreis';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';
	const fNettoPreis = 'fNettoPreis';
	const COLUMN_NAMES = ['kArtikelSonderpreis', 'kKundenGruppe', 'kShop', 'fNettoPreis'];
	const COLUMN_DEFINITIONS = [
		'kArtikelSonderpreis' => [
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
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fNettoPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kArtikelSonderpreis */
	public $kArtikelSonderpreis;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;

	/** @var string fNettoPreis */
	public $fNettoPreis;
}
