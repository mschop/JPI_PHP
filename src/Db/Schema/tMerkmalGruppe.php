<?php

namespace App\Db\Schema;

class tMerkmalGruppe
{
	const TABLE_NAME = 'tMerkmalGruppe';
	const kMerkmalGruppe = 'kMerkmalGruppe';
	const cName = 'cName';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kMerkmalGruppe', 'cName', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kMerkmalGruppe' => [
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
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kMerkmalGruppe */
	public $kMerkmalGruppe;

	/** @var string cName */
	public $cName;

	/** @var int nSort */
	public $nSort;
}
