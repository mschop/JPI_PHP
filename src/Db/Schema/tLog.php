<?php

namespace App\Db\Schema;

class tLog
{
	const TABLE_NAME = 'tLog';
	const dDatum = 'dDatum';
	const kBenutzer = 'kBenutzer';
	const cLog = 'cLog';
	const nTyp = 'nTyp';
	const nVorgang = 'nVorgang';
	const COLUMN_NAMES = ['dDatum', 'kBenutzer', 'cLog', 'nTyp', 'nVorgang'];
	const COLUMN_DEFINITIONS = [
		'dDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLog' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4000,
			'characterSetName' => 'iso_1',
		],
		'nTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVorgang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string dDatum */
	public $dDatum;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cLog */
	public $cLog;

	/** @var int nTyp */
	public $nTyp;

	/** @var int nVorgang */
	public $nVorgang;
}
