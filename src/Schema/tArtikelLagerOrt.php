<?php

namespace App\Schema;

class tArtikelLagerOrt
{
	const TABLE_NAME = 'tArtikelLagerOrt';
	const kArtikelLagerOrt = 'kArtikelLagerOrt';
	const kLager = 'kLager';
	const kLagerOrt = 'kLagerOrt';
	const kArtikel = 'kArtikel';
	const cKommentar = 'cKommentar';
	const COLUMN_NAMES = ['kArtikelLagerOrt', 'kLager', 'kLagerOrt', 'kArtikel', 'cKommentar'];
	const COLUMN_TYPES = [
		'kArtikelLagerOrt' => 'int',
		'kLager' => 'int',
		'kLagerOrt' => 'int',
		'kArtikel' => 'int',
		'cKommentar' => 'varchar',
	];

	/** @var int kArtikelLagerOrt */
	public $kArtikelLagerOrt;

	/** @var int kLager */
	public $kLager;

	/** @var int kLagerOrt */
	public $kLagerOrt;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cKommentar */
	public $cKommentar;
}
