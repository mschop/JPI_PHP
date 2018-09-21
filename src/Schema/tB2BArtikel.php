<?php

namespace App\Schema;

class tB2BArtikel
{
	const TABLE_NAME = 'tB2BArtikel';
	const kB2BArtikel = 'kB2BArtikel';
	const kArtikel = 'kArtikel';
	const cJpid = 'cJpid';
	const COLUMN_NAMES = ['kB2BArtikel', 'kArtikel', 'cJpid'];
	const COLUMN_TYPES = ['kB2BArtikel' => 'int', 'kArtikel' => 'int', 'cJpid' => 'varchar'];

	/** @var int kB2BArtikel */
	public $kB2BArtikel;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cJpid */
	public $cJpid;
}
