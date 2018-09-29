<?php

namespace App\Db\Schema;

class ameise_importdurchgangartikel
{
	const TABLE_NAME = 'ameise_importdurchgangartikel';
	const kImportDurchgang = 'kImportDurchgang';
	const kArtikel = 'kArtikel';
	const COLUMN_NAMES = ['kImportDurchgang', 'kArtikel'];
	const COLUMN_DEFINITIONS = [
		'kImportDurchgang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kImportDurchgang */
	public $kImportDurchgang;

	/** @var int kArtikel */
	public $kArtikel;
}
