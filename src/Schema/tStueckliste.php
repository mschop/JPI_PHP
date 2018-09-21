<?php

namespace App\Schema;

class tStueckliste
{
	const TABLE_NAME = 'tStueckliste';
	const kStueckliste = 'kStueckliste';
	const kArtikel = 'kArtikel';
	const fAnzahl = 'fAnzahl';
	const COLUMN_NAMES = ['kStueckliste', 'kArtikel', 'fAnzahl'];
	const COLUMN_TYPES = ['kStueckliste' => 'int', 'kArtikel' => 'int', 'fAnzahl' => 'decimal'];

	/** @var int kStueckliste */
	public $kStueckliste;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fAnzahl */
	public $fAnzahl;
}
