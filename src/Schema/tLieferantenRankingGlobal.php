<?php

namespace App\Schema;

class tLieferantenRankingGlobal
{
	const TABLE_NAME = 'tLieferantenRankingGlobal';
	const kLieferant = 'kLieferant';
	const nType = 'nType';
	const nRang = 'nRang';
	const nRangMax = 'nRangMax';
	const nAnteilProzent = 'nAnteilProzent';
	const nPauschal = 'nPauschal';
	const dStand = 'dStand';
	const dVon = 'dVon';
	const COLUMN_NAMES = ['kLieferant', 'nType', 'nRang', 'nRangMax', 'nAnteilProzent', 'nPauschal', 'dStand', 'dVon'];
	const COLUMN_TYPES = [
		'kLieferant' => 'int',
		'nType' => 'tinyint',
		'nRang' => 'int',
		'nRangMax' => 'int',
		'nAnteilProzent' => 'decimal',
		'nPauschal' => 'decimal',
		'dStand' => 'datetime',
		'dVon' => 'datetime',
	];

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int nType */
	public $nType;

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
