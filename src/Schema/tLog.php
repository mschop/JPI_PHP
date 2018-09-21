<?php

namespace App\Schema;

class tLog
{
	const TABLE_NAME = 'tLog';
	const dDatum = 'dDatum';
	const kBenutzer = 'kBenutzer';
	const cLog = 'cLog';
	const nTyp = 'nTyp';
	const nVorgang = 'nVorgang';
	const COLUMN_NAMES = ['dDatum', 'kBenutzer', 'cLog', 'nTyp', 'nVorgang'];
	const COLUMN_TYPES = [
		'dDatum' => 'datetime',
		'kBenutzer' => 'int',
		'cLog' => 'varchar',
		'nTyp' => 'int',
		'nVorgang' => 'int',
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
