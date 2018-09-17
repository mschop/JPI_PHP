<?php

namespace App\Schema;

class tWorklog
{
	const TABLE_NAME = 'tWorklog';
	const kWorkerlog = 'kWorkerlog';
	const cMessage = 'cMessage';
	const nErrorID = 'nErrorID';
	const dDate = 'dDate';

	/** @var int kWorkerlog */
	public $kWorkerlog;

	/** @var string cMessage */
	public $cMessage;

	/** @var int nErrorID */
	public $nErrorID;

	/** @var string dDate */
	public $dDate;
}
