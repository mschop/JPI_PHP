<?php

namespace App\Schema;

class tStatistikAuswertungstyp
{
	const TABLE_NAME = 'tStatistikAuswertungstyp';
	const kStatistikAuswertungstyp = 'kStatistikAuswertungstyp';
	const cName = 'cName';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kStatistikAuswertungstyp', 'cName', 'nSort'];
	const COLUMN_TYPES = ['kStatistikAuswertungstyp' => 'int', 'cName' => 'varchar', 'nSort' => 'tinyint'];

	/** @var int kStatistikAuswertungstyp */
	public $kStatistikAuswertungstyp;

	/** @var string cName */
	public $cName;

	/** @var int nSort */
	public $nSort;
}
