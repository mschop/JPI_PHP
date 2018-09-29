<?php

namespace App\Db\Schema;

class tArtikelSonderpreis
{
	const TABLE_NAME = 'tArtikelSonderpreis';
	const kArtikelSonderpreis = 'kArtikelSonderpreis';
	const kArtikel = 'kArtikel';
	const nAktiv = 'nAktiv';
	const dStart = 'dStart';
	const nAnzahl = 'nAnzahl';
	const dEnde = 'dEnde';
	const nIstDatum = 'nIstDatum';
	const nIstAnzahl = 'nIstAnzahl';
	const COLUMN_NAMES = ['kArtikelSonderpreis', 'kArtikel', 'nAktiv', 'dStart', 'nAnzahl', 'dEnde', 'nIstDatum', 'nIstAnzahl'];
	const COLUMN_DEFINITIONS = [
		'kArtikelSonderpreis' => [
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
		'nAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dStart' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahl' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dEnde' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstDatum' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstAnzahl' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kArtikelSonderpreis */
	public $kArtikelSonderpreis;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var string dStart */
	public $dStart;

	/** @var int nAnzahl */
	public $nAnzahl;

	/** @var string dEnde */
	public $dEnde;

	/** @var int nIstDatum */
	public $nIstDatum;

	/** @var int nIstAnzahl */
	public $nIstAnzahl;
}
