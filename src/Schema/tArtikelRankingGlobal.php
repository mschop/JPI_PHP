<?php

namespace App\Schema;

class tArtikelRankingGlobal
{
	const TABLE_NAME = 'tArtikelRankingGlobal';
	const kArtikel = 'kArtikel';
	const nType = 'nType';
	const kShop = 'kShop';
	const nPlattform = 'nPlattform';
	const nRang = 'nRang';
	const nRangMax = 'nRangMax';
	const nAnteilProzent = 'nAnteilProzent';
	const nPauschal = 'nPauschal';
	const dStand = 'dStand';
	const dVon = 'dVon';
	const COLUMN_NAMES = [
		'kArtikel',
		'nType',
		'kShop',
		'nPlattform',
		'nRang',
		'nRangMax',
		'nAnteilProzent',
		'nPauschal',
		'dStand',
		'dVon',
	];
	const COLUMN_TYPES = [
		'kArtikel' => 'int',
		'nType' => 'tinyint',
		'kShop' => 'int',
		'nPlattform' => 'int',
		'nRang' => 'int',
		'nRangMax' => 'int',
		'nAnteilProzent' => 'decimal',
		'nPauschal' => 'decimal',
		'dStand' => 'datetime',
		'dVon' => 'datetime',
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int nType */
	public $nType;

	/** @var int kShop */
	public $kShop;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var int nRang */
	public $nRang;

	/** @var int nRangMax */
	public $nRangMax;

	/** @var string nAnteilProzent */
	public $nAnteilProzent;

	/** @var string nPauschal */
	public $nPauschal;

	/** @var string dStand */
	public $dStand;

	/** @var string dVon */
	public $dVon;
}
