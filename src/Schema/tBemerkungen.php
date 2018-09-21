<?php

namespace App\Schema;

class tBemerkungen
{
	const TABLE_NAME = 'tBemerkungen';
	const kBemerkungen = 'kBemerkungen';
	const cName = 'cName';
	const cString = 'cString';
	const COLUMN_NAMES = ['kBemerkungen', 'cName', 'cString'];
	const COLUMN_TYPES = ['kBemerkungen' => 'int', 'cName' => 'varchar', 'cString' => 'varchar'];

	/** @var int kBemerkungen */
	public $kBemerkungen;

	/** @var string cName */
	public $cName;

	/** @var string cString */
	public $cString;
}
