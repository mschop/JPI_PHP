<?php

namespace App\Db\Schema;

class tLiefArtikelPreis
{
	const TABLE_NAME = 'tLiefArtikelPreis';
	const kLiefArtikelPreis = 'kLiefArtikelPreis';
	const kLiefArtikel = 'kLiefArtikel';
	const fAb = 'fAb';
	const fPreisNetto = 'fPreisNetto';
	const COLUMN_NAMES = ['kLiefArtikelPreis', 'kLiefArtikel', 'fAb', 'fPreisNetto'];
	const COLUMN_DEFINITIONS = [
		'kLiefArtikelPreis' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLiefArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAb' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPreisNetto' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLiefArtikelPreis */
	public $kLiefArtikelPreis;

	/** @var int kLiefArtikel */
	public $kLiefArtikel;

	/** @var string fAb */
	public $fAb;

	/** @var string fPreisNetto */
	public $fPreisNetto;
}
