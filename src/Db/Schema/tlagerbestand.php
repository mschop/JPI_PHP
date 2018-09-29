<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fLagerbestand' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVerfuegbar' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVerfuegbarGesperrt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fZulauf' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAufEinkaufsliste' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLieferdatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fLagerbestandEigen' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fInAuftraegen' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLagerAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nArtikelTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTeilbar' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLagerKleinerNull' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
