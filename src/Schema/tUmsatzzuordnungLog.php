<?php

namespace App\Schema;

class tUmsatzzuordnungLog
{
	const TABLE_NAME = 'tUmsatzzuordnungLog';
	const kUmsatzzuordnungLog = 'kUmsatzzuordnungLog';
	const dDatum = 'dDatum';
	const cDaten = 'cDaten';
	const COLUMN_NAMES = ['kUmsatzzuordnungLog', 'dDatum', 'cDaten'];
	const COLUMN_TYPES = ['kUmsatzzuordnungLog' => 'int', 'dDatum' => 'datetime', 'cDaten' => 'varchar'];

	/** @var int kUmsatzzuordnungLog */
	public $kUmsatzzuordnungLog;

	/** @var string dDatum */
	public $dDatum;

	/** @var string cDaten */
	public $cDaten;
}
