<?php

namespace App\Db\Schema;

class tlagerbestandProLagerLagerartikel
{
	const TABLE_NAME = 'tlagerbestandProLagerLagerartikel';
	const kArtikel = 'kArtikel';
	const kWarenlager = 'kWarenlager';
	const fBestand = 'fBestand';
	const COLUMN_NAMES = ['kArtikel', 'kWarenlager', 'fBestand'];
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fBestand' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var string fBestand */
	public $fBestand;
}
