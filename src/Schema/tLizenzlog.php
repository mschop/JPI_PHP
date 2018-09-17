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
