<?php

namespace App\Db\Schema;

class tKategorieRabatt
{
	const TABLE_NAME = 'tKategorieRabatt';
	const kKategorie = 'kKategorie';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';
	const fRabatt = 'fRabatt';
	const COLUMN_NAMES = ['kKategorie', 'kKundenGruppe', 'kShop', 'fRabatt'];
	const COLUMN_DEFINITIONS = [
		'kKategorie' => [
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
		'fRabatt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;

	/** @var string fRabatt */
	public $fRabatt;
}
