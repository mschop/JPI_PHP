<?php

namespace App\Schema;

class tartikeldownload
{
	const TABLE_NAME = 'tartikeldownload';
	const kArtikel = 'kArtikel';
	const kDownload = 'kDownload';
	const COLUMN_NAMES = ['kArtikel', 'kDownload'];
	const COLUMN_TYPES = ['kArtikel' => 'int', 'kDownload' => 'int'];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kDownload */
	public $kDownload;
}
