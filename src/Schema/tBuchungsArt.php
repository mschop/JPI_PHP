<?php

namespace App\Schema;

class tBuchungsArt
{
	const TABLE_NAME = 'tBuchungsArt';
	const kBuchungsart = 'kBuchungsart';
	const cName = 'cName';
	const COLUMN_NAMES = ['kBuchungsart', 'cName'];
	const COLUMN_TYPES = ['kBuchungsart' => 'int', 'cName' => 'varchar'];

	/** @var int kBuchungsart */
	public $kBuchungsart;

	/** @var string cName */
	public $cName;
}
