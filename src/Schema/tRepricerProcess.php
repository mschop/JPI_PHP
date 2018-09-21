<?php

namespace App\Schema;

class tRepricerProcess
{
	const TABLE_NAME = 'tRepricerProcess';
	const nId = 'nId';
	const cMandant = 'cMandant';
	const dUpdated = 'dUpdated';
	const COLUMN_NAMES = ['nId', 'cMandant', 'dUpdated'];
	const COLUMN_TYPES = ['nId' => 'int', 'cMandant' => 'varchar', 'dUpdated' => 'datetime'];

	/** @var int nId */
	public $nId;

	/** @var string cMandant */
	public $cMandant;

	/** @var string dUpdated */
	public $dUpdated;
}
