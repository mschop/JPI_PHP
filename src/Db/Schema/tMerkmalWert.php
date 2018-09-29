<?php

namespace App\Db\Schema;

class tMerkmalWert
{
	const TABLE_NAME = 'tMerkmalWert';
	const kMerkmalWert = 'kMerkmalWert';
	const kMerkmal = 'kMerkmal';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kMerkmalWert', 'kMerkmal', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kMerkmalWert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMerkmal' => [
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
	];

	/** @var int kMerkmalWert */
	public $kMerkmalWert;

	/** @var int kMerkmal */
	public $kMerkmal;

	/** @var int nSort */
	public $nSort;
}
