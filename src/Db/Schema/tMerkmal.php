<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kMerkmal' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nGlobal' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTyp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nVerwendungszweck' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMehrfachauswahl' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
