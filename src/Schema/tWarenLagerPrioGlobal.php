<?php

namespace App\Schema;

class tWarenLagerPrioGlobal
{
	const TABLE_NAME = 'tWarenLagerPrioGlobal';
	const kWarenLager = 'kWarenLager';
	const kVertriebsweg = 'kVertriebsweg';
	const nPrio = 'nPrio';
	const COLUMN_NAMES = ['kWarenLager', 'kVertriebsweg', 'nPrio'];
	const COLUMN_TYPES = ['kWarenLager' => 'int', 'kVertriebsweg' => 'int', 'nPrio' => 'int'];

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var int kVertriebsweg */
	public $kVertriebsweg;

	/** @var int nPrio */
	public $nPrio;
}
