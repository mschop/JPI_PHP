<?php

namespace App\Db\Schema;

class tartikeldownload
{
	const TABLE_NAME = 'tartikeldownload';
	const kArtikel = 'kArtikel';
	const kDownload = 'kDownload';
	const COLUMN_NAMES = ['kArtikel', 'kDownload'];
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kDownload' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kDownload */
	public $kDownload;
}
