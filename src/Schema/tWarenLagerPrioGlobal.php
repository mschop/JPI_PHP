<?php

namespace App\Schema;

class tWarenLagerPrioGlobal
{
	const TABLE_NAME = 'tWarenLagerPrioGlobal';
	const kWarenLager = 'kWarenLager';
	const kVertriebsweg = 'kVertriebsweg';
	const nPrio = 'nPrio';

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var int kVertriebsweg */
	public $kVertriebsweg;

	/** @var int nPrio */
	public $nPrio;
}
