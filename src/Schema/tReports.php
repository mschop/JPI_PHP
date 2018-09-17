<?php

namespace App\Schema;

class tReports
{
	const TABLE_NAME = 'tReports';
	const kReports = 'kReports';
	const cName = 'cName';
	const cData = 'cData';
	const cTyp = 'cTyp';
	const cDataSet = 'cDataSet';

	/** @var int kReports */
	public $kReports;

	/** @var string cName */
	public $cName;

	/** @var string cData */
	public $cData;

	/** @var string cTyp */
	public $cTyp;

	/** @var string cDataSet */
	public $cDataSet;
}
