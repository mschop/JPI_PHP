<?php

namespace App\Schema;

class tMerkmal
{
	const TABLE_NAME = 'tMerkmal';
	const kMerkmal = 'kMerkmal';
	const nSort = 'nSort';
	const nGlobal = 'nGlobal';
	const cTyp = 'cTyp';
	const nVerwendungszweck = 'nVerwendungszweck';
	const nMehrfachauswahl = 'nMehrfachauswahl';
	const COLUMN_NAMES = ['kMerkmal', 'nSort', 'nGlobal', 'cTyp', 'nVerwendungszweck', 'nMehrfachauswahl'];
	const COLUMN_TYPES = [
		'kMerkmal' => 'int',
		'nSort' => 'int',
		'nGlobal' => 'tinyint',
		'cTyp' => 'varchar',
		'nVerwendungszweck' => 'tinyint',
		'nMehrfachauswahl' => 'tinyint',
	];

	/** @var int kMerkmal */
	public $kMerkmal;

	/** @var int nSort */
	public $nSort;

	/** @var int nGlobal */
	public $nGlobal;

	/** @var string cTyp */
	public $cTyp;

	/** @var int nVerwendungszweck */
	public $nVerwendungszweck;

	/** @var int nMehrfachauswahl */
	public $nMehrfachauswahl;
}
