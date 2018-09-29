<?php

namespace App\Db\Schema;

class tStatistikAuswertungstyp
{
	const TABLE_NAME = 'tStatistikAuswertungstyp';
	const kStatistikAuswertungstyp = 'kStatistikAuswertungstyp';
	const cName = 'cName';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kStatistikAuswertungstyp', 'cName', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kStatistikAuswertungstyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSort' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kStatistikAuswertungstyp */
	public $kStatistikAuswertungstyp;

	/** @var string cName */
	public $cName;

	/** @var int nSort */
	public $nSort;
}
