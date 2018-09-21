<?php

namespace App\Schema;

class tReportsDataSet
{
	const TABLE_NAME = 'tReportsDataSet';
	const kReports = 'kReports';
	const cDataSet = 'cDataSet';
	const cName = 'cName';
	const COLUMN_NAMES = ['kReports', 'cDataSet', 'cName'];
	const COLUMN_TYPES = ['kReports' => 'int', 'cDataSet' => 'varchar', 'cName' => 'varchar'];

	/** @var int kReports */
	public $kReports;

	/** @var string cDataSet */
	public $cDataSet;

	/** @var string cName */
	public $cName;
}
