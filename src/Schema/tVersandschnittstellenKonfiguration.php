<?php

namespace App\Schema;

class tVersandschnittstellenKonfiguration
{
	const TABLE_NAME = 'tVersandschnittstellenKonfiguration';
	const kVersandArt = 'kVersandArt';
	const cKey = 'cKey';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kVersandArt', 'cKey', 'cValue'];
	const COLUMN_TYPES = ['kVersandArt' => 'int', 'cKey' => 'varchar', 'cValue' => 'varchar'];

	/** @var int kVersandArt */
	public $kVersandArt;

	/** @var string cKey */
	public $cKey;

	/** @var string cValue */
	public $cValue;
}
