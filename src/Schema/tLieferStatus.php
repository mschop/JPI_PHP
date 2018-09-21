<?php

namespace App\Schema;

class tLieferStatus
{
	const TABLE_NAME = 'tLieferStatus';
	const kLieferStatus = 'kLieferStatus';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kLieferStatus', 'kSprache', 'cName'];
	const COLUMN_TYPES = ['kLieferStatus' => 'int', 'kSprache' => 'int', 'cName' => 'varchar'];

	/** @var int kLieferStatus */
	public $kLieferStatus;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
