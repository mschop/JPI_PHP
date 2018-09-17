<?php

namespace App\Schema;

class tLieferantenRankingZeitraum
{
	const TABLE_NAME = 'tLieferantenRankingZeitraum';
	const kLieferant = 'kLieferant';
	const nZeitraum = 'nZeitraum';
	const dVon = 'dVon';
	const nType = 'nType';
	const nRang = 'nRang';
	const nRangMax = 'nRangMax';
	const nAnteilProzent = 'nAnteilProzent';
	const nPauschal = 'nPauschal';
	const dStand = 'dStand';

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int nZeitraum */
	public $nZeitraum;

	/** @var string dVon */
	public $dVon;

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
}
