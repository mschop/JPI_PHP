<?php

namespace App\Schema;

class tRMRetoureAustauschArtikel
{
	const TABLE_NAME = 'tRMRetoureAustauschArtikel';
	const kRMRetoureAustauschArtikel = 'kRMRetoureAustauschArtikel';
	const kRMRetoure = 'kRMRetoure';
	const kArtikel = 'kArtikel';
	const fAnzahl = 'fAnzahl';
	const fVkPreis = 'fVkPreis';
	const fVkNetto = 'fVkNetto';
	const cHinweis = 'cHinweis';
	const fRabatt = 'fRabatt';
	const fMwSt = 'fMwSt';
	const COLUMN_NAMES = [
		'kRMRetoureAustauschArtikel',
		'kRMRetoure',
		'kArtikel',
		'fAnzahl',
		'fVkPreis',
		'fVkNetto',
		'cHinweis',
		'fRabatt',
		'fMwSt',
	];
	const COLUMN_TYPES = [
		'kRMRetoureAustauschArtikel' => 'int',
		'kRMRetoure' => 'int',
		'kArtikel' => 'int',
		'fAnzahl' => 'decimal',
		'fVkPreis' => 'decimal',
		'fVkNetto' => 'decimal',
		'cHinweis' => 'varchar',
		'fRabatt' => 'decimal',
		'fMwSt' => 'decimal',
	];

	/** @var int kRMRetoureAustauschArtikel */
	public $kRMRetoureAustauschArtikel;

	/** @var int kRMRetoure */
	public $kRMRetoure;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string fVkPreis */
	public $fVkPreis;

	/** @var string fVkNetto */
	public $fVkNetto;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var string fRabatt */
	public $fRabatt;

	/** @var string fMwSt */
	public $fMwSt;
}
