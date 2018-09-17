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
