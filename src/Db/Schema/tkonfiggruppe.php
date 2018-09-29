<?php

namespace App\Db\Schema;

class tkonfiggruppe
{
	const TABLE_NAME = 'tkonfiggruppe';
	const kKonfiggruppe = 'kKonfiggruppe';
	const bild = 'bild';
	const nMin = 'nMin';
	const nMax = 'nMax';
	const nTyp = 'nTyp';
	const nSort = 'nSort';
	const cKommentar = 'cKommentar';
	const COLUMN_NAMES = ['kKonfiggruppe', 'bild', 'nMin', 'nMax', 'nTyp', 'nSort', 'cKommentar'];
	const COLUMN_DEFINITIONS = [
		'kKonfiggruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bild' => [
			'type' => 'image',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2147483647,
			'characterSetName' => null,
		],
		'nMin' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMax' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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
		'cKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kKonfiggruppe */
	public $kKonfiggruppe;

	/** @var resource bild */
	public $bild;

	/** @var int nMin */
	public $nMin;

	/** @var int nMax */
	public $nMax;

	/** @var int nTyp */
	public $nTyp;

	/** @var int nSort */
	public $nSort;

	/** @var string cKommentar */
	public $cKommentar;
}
