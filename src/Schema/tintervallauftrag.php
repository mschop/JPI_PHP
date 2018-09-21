<?php

namespace App\Schema;

class tintervallauftrag
{
	const TABLE_NAME = 'tintervallauftrag';
	const kIntervall = 'kIntervall';
	const dStart = 'dStart';
	const COLUMN_NAMES = ['kIntervall', 'dStart'];
	const COLUMN_TYPES = ['kIntervall' => 'int', 'dStart' => 'datetime'];

	/** @var int kIntervall */
	public $kIntervall;

	/** @var string dStart */
	public $dStart;
}
