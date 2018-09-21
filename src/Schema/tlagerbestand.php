<?php

namespace App\Schema;

class tlagerbestand
{
	const TABLE_NAME = 'tlagerbestand';
	const kArtikel = 'kArtikel';
	const fLagerbestand = 'fLagerbestand';
	const fVerfuegbar = 'fVerfuegbar';
	const fVerfuegbarGesperrt = 'fVerfuegbarGesperrt';
	const fZulauf = 'fZulauf';
	const fAufEinkaufsliste = 'fAufEinkaufsliste';
	const dLieferdatum = 'dLieferdatum';
	const fLagerbestandEigen = 'fLagerbestandEigen';
	const fInAuftraegen = 'fInAuftraegen';
	const nLagerAktiv = 'nLagerAktiv';
	const nArtikelTyp = 'nArtikelTyp';
	const nTeilbar = 'nTeilbar';
	const nLagerKleinerNull = 'nLagerKleinerNull';
	const COLUMN_NAMES = [
		'kArtikel',
		'fLagerbestand',
		'fVerfuegbar',
		'fVerfuegbarGesperrt',
		'fZulauf',
		'fAufEinkaufsliste',
		'dLieferdatum',
		'fLagerbestandEigen',
		'fInAuftraegen',
		'nLagerAktiv',
		'nArtikelTyp',
		'nTeilbar',
		'nLagerKleinerNull',
	];
	const COLUMN_TYPES = [
		'kArtikel' => 'int',
		'fLagerbestand' => 'decimal',
		'fVerfuegbar' => 'decimal',
		'fVerfuegbarGesperrt' => 'decimal',
		'fZulauf' => 'decimal',
		'fAufEinkaufsliste' => 'decimal',
		'dLieferdatum' => 'datetime',
		'fLagerbestandEigen' => 'decimal',
		'fInAuftraegen' => 'decimal',
		'nLagerAktiv' => 'tinyint',
		'nArtikelTyp' => 'tinyint',
		'nTeilbar' => 'tinyint',
		'nLagerKleinerNull' => 'tinyint',
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fLagerbestand */
	public $fLagerbestand;

	/** @var string fVerfuegbar */
	public $fVerfuegbar;

	/** @var string fVerfuegbarGesperrt */
	public $fVerfuegbarGesperrt;

	/** @var string fZulauf */
	public $fZulauf;

	/** @var string fAufEinkaufsliste */
	public $fAufEinkaufsliste;

	/** @var string dLieferdatum */
	public $dLieferdatum;

	/** @var string fLagerbestandEigen */
	public $fLagerbestandEigen;

	/** @var string fInAuftraegen */
	public $fInAuftraegen;

	/** @var int nLagerAktiv */
	public $nLagerAktiv;

	/** @var int nArtikelTyp */
	public $nArtikelTyp;

	/** @var int nTeilbar */
	public $nTeilbar;

	/** @var int nLagerKleinerNull */
	public $nLagerKleinerNull;
}
