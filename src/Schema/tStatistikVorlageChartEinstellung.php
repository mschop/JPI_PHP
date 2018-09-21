<?php

namespace App\Schema;

class tStatistikVorlageChartEinstellung
{
	const TABLE_NAME = 'tStatistikVorlageChartEinstellung';
	const kStatistikVorlage = 'kStatistikVorlage';
	const cName = 'cName';
	const cValue = 'cValue';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kStatistikVorlage', 'cName', 'cValue', 'nSort'];
	const COLUMN_TYPES = ['kStatistikVorlage' => 'int', 'cName' => 'varchar', 'cValue' => 'varchar', 'nSort' => 'int'];

	/** @var int kStatistikVorlage */
	public $kStatistikVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;

	/** @var int nSort */
	public $nSort;
}
