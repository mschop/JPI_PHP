<?php

namespace App\Schema;

class tLizenzlog
{
	const TABLE_NAME = 'tLizenzlog';
	const kLizenzlog = 'kLizenzlog';
	const nTyp = 'nTyp';
	const cAufruf = 'cAufruf';
	const cLog = 'cLog';
	const dDatum = 'dDatum';
	const COLUMN_NAMES = ['kLizenzlog', 'nTyp', 'cAufruf', 'cLog', 'dDatum'];
	const COLUMN_TYPES = [
		'kLizenzlog' => 'int',
		'nTyp' => 'tinyint',
		'cAufruf' => 'varchar',
		'cLog' => 'varchar',
		'dDatum' => 'datetime',
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
