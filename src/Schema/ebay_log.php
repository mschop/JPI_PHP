<?php

namespace App\Schema;

class ebay_log
{
	const TABLE_NAME = 'ebay_log';
	const dDatum = 'dDatum';
	const cString = 'cString';
	const cText = 'cText';
	const kItem = 'kItem';
	const COLUMN_NAMES = ['dDatum', 'cString', 'cText', 'kItem'];
	const COLUMN_TYPES = ['dDatum' => 'varchar', 'cString' => 'varchar', 'cText' => 'varchar', 'kItem' => 'int'];

	/** @var string dDatum */
	public $dDatum;

	/** @var string cString */
	public $cString;

	/** @var string cText */
	public $cText;

	/** @var int kItem */
	public $kItem;
}
