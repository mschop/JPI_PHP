<?php

namespace App\Db\Schema;

class tWarenLagerPrioGlobal
{
	const TABLE_NAME = 'tWarenLagerPrioGlobal';
	const kWarenLager = 'kWarenLager';
	const kVertriebsweg = 'kVertriebsweg';
	const nPrio = 'nPrio';
	const COLUMN_NAMES = ['kWarenLager', 'kVertriebsweg', 'nPrio'];
	const COLUMN_DEFINITIONS = [
		'kWarenLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVertriebsweg' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPrio' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var int kVertriebsweg */
	public $kVertriebsweg;

	/** @var int nPrio */
	public $nPrio;
}
