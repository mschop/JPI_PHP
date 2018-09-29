<?php

namespace App\Db\Schema;

class tArtikelSperre
{
	const TABLE_NAME = 'tArtikelSperre';
	const kArtikel = 'kArtikel';
	const cName = 'cName';
	const COLUMN_NAMES = ['kArtikel', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cName */
	public $cName;
}
