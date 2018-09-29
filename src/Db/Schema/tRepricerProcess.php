<?php

namespace App\Db\Schema;

class tRepricerProcess
{
	const TABLE_NAME = 'tRepricerProcess';
	const nId = 'nId';
	const cMandant = 'cMandant';
	const dUpdated = 'dUpdated';
	const COLUMN_NAMES = ['nId', 'cMandant', 'dUpdated'];
	const COLUMN_DEFINITIONS = [
		'nId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMandant' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dUpdated' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int nId */
	public $nId;

	/** @var string cMandant */
	public $cMandant;

	/** @var string dUpdated */
	public $dUpdated;
}
