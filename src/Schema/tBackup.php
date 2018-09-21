<?php

namespace App\Schema;

class tBackup
{
	const TABLE_NAME = 'tBackup';
	const kBackup = 'kBackup';
	const dDatum = 'dDatum';
	const COLUMN_NAMES = ['kBackup', 'dDatum'];
	const COLUMN_TYPES = ['kBackup' => 'tinyint', 'dDatum' => 'varchar'];

	/** @var int kBackup */
	public $kBackup;

	/** @var string dDatum */
	public $dDatum;
}
