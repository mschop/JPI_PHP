<?php

namespace App\Schema;

class tArtikelEinkaufsliste
{
	const TABLE_NAME = 'tArtikelEinkaufsliste';
	const kArtikel = 'kArtikel';
	const kBenutzer = 'kBenutzer';
	const dErstellt = 'dErstellt';
	const cStatus = 'cStatus';
	const fAnzahl = 'fAnzahl';
	const kLieferant = 'kLieferant';
	const fEKNettoLieferant = 'fEKNettoLieferant';
	const cHinweis = 'cHinweis';
	const cBestellmodus = 'cBestellmodus';
	const COLUMN_NAMES = [
		'kArtikel',
		'kBenutzer',
		'dErstellt',
		'cStatus',
		'fAnzahl',
		'kLieferant',
		'fEKNettoLieferant',
		'cHinweis',
		'cBestellmodus',
	];
	const COLUMN_TYPES = [
		'kArtikel' => 'int',
		'kBenutzer' => 'int',
		'dErstellt' => 'datetime',
		'cStatus' => 'varchar',
		'fAnzahl' => 'decimal',
		'kLieferant' => 'int',
		'fEKNettoLieferant' => 'decimal',
		'cHinweis' => 'varchar',
		'cBestellmodus' => 'varchar',
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cStatus */
	public $cStatus;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string fEKNettoLieferant */
	public $fEKNettoLieferant;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var string cBestellmodus */
	public $cBestellmodus;
}
