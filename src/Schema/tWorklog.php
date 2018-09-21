<?php

namespace App\Schema;

class tWorklog
{
	const TABLE_NAME = 'tWorklog';
	const kWorkerlog = 'kWorkerlog';
	const cMessage = 'cMessage';
	const nErrorID = 'nErrorID';
	const dDate = 'dDate';
	const COLUMN_NAMES = ['kWorkerlog', 'cMessage', 'nErrorID', 'dDate'];
	const COLUMN_TYPES = ['kWorkerlog' => 'int', 'cMessage' => 'varchar', 'nErrorID' => 'bigint', 'dDate' => 'datetime'];

	/** @var int kWorkerlog */
	public $kWorkerlog;

	/** @var string cMessage */
	public $cMessage;

	/** @var int nErrorID */
	public $nErrorID;

	/** @var string dDate */
	public $dDate;
}
