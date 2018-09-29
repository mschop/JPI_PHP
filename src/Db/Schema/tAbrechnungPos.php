<?php

namespace App\Db\Schema;

class tAbrechnungPos
{
	const TABLE_NAME = 'tAbrechnungPos';
	const kAbrechnungPos = 'kAbrechnungPos';
	const kAbrechnung = 'kAbrechnung';
	const kArtikel = 'kArtikel';
	const kAbrechnungStueckliste = 'kAbrechnungStueckliste';
	const cBezeichnung = 'cBezeichnung';
	const cArtNr = 'cArtNr';
	const cEinheit = 'cEinheit';
	const fAnzahl = 'fAnzahl';
	const fVKNetto = 'fVKNetto';
	const fMwSt = 'fMwSt';
	const fVKPreis = 'fVKPreis';
	const fRabatt = 'fRabatt';
	const nSort = 'nSort';
	const cHinweis = 'cHinweis';
	const nType = 'nType';
	const COLUMN_NAMES = [
		'kAbrechnungPos',
		'kAbrechnung',
		'kArtikel',
		'kAbrechnungStueckliste',
		'cBezeichnung',
		'cArtNr',
		'cEinheit',
		'fAnzahl',
		'fVKNetto',
		'fMwSt',
		'fVKPreis',
		'fRabatt',
		'nSort',
		'cHinweis',
		'nType',
	];
	const COLUMN_DEFINITIONS = [
		'kAbrechnungPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAbrechnung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAbrechnungStueckliste' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBezeichnung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cArtNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cEinheit' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVKNetto' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMwSt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVKPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fRabatt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHinweis' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4000,
			'characterSetName' => 'UNICODE',
		],
		'nType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAbrechnungPos */
	public $kAbrechnungPos;

	/** @var int kAbrechnung */
	public $kAbrechnung;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kAbrechnungStueckliste */
	public $kAbrechnungStueckliste;

	/** @var string cBezeichnung */
	public $cBezeichnung;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var string cEinheit */
	public $cEinheit;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string fVKNetto */
	public $fVKNetto;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var string fVKPreis */
	public $fVKPreis;

	/** @var string fRabatt */
	public $fRabatt;

	/** @var int nSort */
	public $nSort;

	/** @var resource cHinweis */
	public $cHinweis;

	/** @var int nType */
	public $nType;
}
