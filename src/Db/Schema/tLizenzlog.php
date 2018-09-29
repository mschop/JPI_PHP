<?php

namespace App\Db\Schema;

class tLizenzlog
{
	const TABLE_NAME = 'tLizenzlog';
	const kLizenzlog = 'kLizenzlog';
	const nTyp = 'nTyp';
	const cAufruf = 'cAufruf';
	const cLog = 'cLog';
	const dDatum = 'dDatum';
	const COLUMN_NAMES = ['kLizenzlog', 'nTyp', 'cAufruf', 'cLog', 'dDatum'];
	const COLUMN_DEFINITIONS = [
		'kLizenzlog' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAufruf' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLog' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'dDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLizenzlog */
	public $kLizenzlog;

	/** @var int nTyp */
	public $nTyp;

	/** @var string cAufruf */
	public $cAufruf;

	/** @var string cLog */
	public $cLog;

	/** @var string dDatum */
	public $dDatum;
}
