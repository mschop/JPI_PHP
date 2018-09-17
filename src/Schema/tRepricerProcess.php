<?php

namespace App\Schema;

class tRepricerProcess
{
	const TABLE_NAME = 'tRepricerProcess';
	const nId = 'nId';
	const cMandant = 'cMandant';
	const dUpdated = 'dUpdated';

	/** @var int nId */
	public $nId;

	/** @var string cMandant */
	public $cMandant;

	/** @var string dUpdated */
	public $dUpdated;
}
