<?php

namespace App\Schema;

class tZALog
{
	const TABLE_NAME = 'tZALog';
	const dDate = 'dDate';
	const cDatum = 'cDatum';
	const cString = 'cString';
	const COLUMN_NAMES = ['dDate', 'cDatum', 'cString'];
	const COLUMN_TYPES = ['dDate' => 'varchar', 'cDatum' => 'varchar', 'cString' => 'varchar'];

	/** @var string dDate */
	public $dDate;

	/** @var string cDatum */
	public $cDatum;

	/** @var string cString */
	public $cString;
}
