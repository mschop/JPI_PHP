<?php

namespace App\Schema;

class tLastModified
{
	const TABLE_NAME = 'tLastModified';
	const kLastModified = 'kLastModified';
	const cTablename = 'cTablename';
	const dLastModified = 'dLastModified';

	/** @var int kLastModified */
	public $kLastModified;

	/** @var string cTablename */
	public $cTablename;

	/** @var string dLastModified */
	public $dLastModified;
}
