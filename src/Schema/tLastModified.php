<?php

namespace App\Schema;

class tLastModified
{
	const TABLE_NAME = 'tLastModified';
	const kLastModified = 'kLastModified';
	const cTablename = 'cTablename';
	const dLastModified = 'dLastModified';
	const COLUMN_NAMES = ['kLastModified', 'cTablename', 'dLastModified'];
	const COLUMN_TYPES = ['kLastModified' => 'int', 'cTablename' => 'varchar', 'dLastModified' => 'datetime'];

	/** @var int kLastModified */
	public $kLastModified;

	/** @var string cTablename */
	public $cTablename;

	/** @var string dLastModified */
	public $dLastModified;
}
