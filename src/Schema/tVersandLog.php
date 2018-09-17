<?php

namespace App\Schema;

class tVersandLog
{
	const TABLE_NAME = 'tVersandLog';
	const kVersandLog = 'kVersandLog';
	const kVersand = 'kVersand';
	const dZeitstempel = 'dZeitstempel';
	const nStatus = 'nStatus';
	const cMessage = 'cMessage';

	/** @var int kVersandLog */
	public $kVersandLog;

	/** @var int kVersand */
	public $kVersand;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cMessage */
	public $cMessage;
}
