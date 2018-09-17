<?php

namespace App\Schema;

class tStueckliste
{
	const TABLE_NAME = 'tStueckliste';
	const kStueckliste = 'kStueckliste';
	const kArtikel = 'kArtikel';
	const fAnzahl = 'fAnzahl';

	/** @var int kStueckliste */
	public $kStueckliste;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fAnzahl */
	public $fAnzahl;
}
