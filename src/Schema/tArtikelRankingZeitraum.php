<?php

namespace App\Schema;

class tArtikelRankingZeitraum
{
	const TABLE_NAME = 'tArtikelRankingZeitraum';
	const kArtikel = 'kArtikel';
	const nZeitraum = 'nZeitraum';
	const dVon = 'dVon';
	const nType = 'nType';
	const kShop = 'kShop';
	const nPlattform = 'nPlattform';
	const nRang = 'nRang';
	const nRangMax = 'nRangMax';
	const nAnteilProzent = 'nAnteilProzent';
	const nPauschal = 'nPauschal';
	const dStand = 'dStand';
	const COLUMN_NAMES = [
		'kArtikel',
		'nZeitraum',
		'dVon',
		'nType',
		'kShop',
		'nPlattform',
		'nRang',
		'nRangMax',
		'nAnteilProzent',
		'nPauschal',
		'dStand',
	];
	const COLUMN_TYPES = [
		'kArtikel' => 'int',
		'nZeitraum' => 'tinyint',
		'dVon' => 'datetime',
		'nType' => 'tinyint',
		'kShop' => 'int',
		'nPlattform' => 'int',
		'nRang' => 'int',
		'nRangMax' => 'int',
		'nAnteilProzent' => 'decimal',
		'nPauschal' => 'decimal',
		'dStand' => 'datetime',
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int nZeitraum */
	public $nZeitraum;

	/** @var string dVon */
	public $dVon;

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
}
