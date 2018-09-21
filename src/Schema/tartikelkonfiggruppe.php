<?php

namespace App\Schema;

class tartikelkonfiggruppe
{
	const TABLE_NAME = 'tartikelkonfiggruppe';
	const kArtikelkonfiggruppe = 'kArtikelkonfiggruppe';
	const kArtikel = 'kArtikel';
	const kKonfiggruppe = 'kKonfiggruppe';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kArtikelkonfiggruppe', 'kArtikel', 'kKonfiggruppe', 'nSort'];
	const COLUMN_TYPES = ['kArtikelkonfiggruppe' => 'int', 'kArtikel' => 'int', 'kKonfiggruppe' => 'int', 'nSort' => 'int'];

	/** @var int kArtikelkonfiggruppe */
	public $kArtikelkonfiggruppe;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kKonfiggruppe */
	public $kKonfiggruppe;

	/** @var int nSort */
	public $nSort;
}
