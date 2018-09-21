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
	const COLUMN_NAMES = ['kVersandLog', 'kVersand', 'dZeitstempel', 'nStatus', 'cMessage'];
	const COLUMN_TYPES = [
		'kVersandLog' => 'int',
		'kVersand' => 'int',
		'dZeitstempel' => 'datetime',
		'nStatus' => 'tinyint',
		'cMessage' => 'varchar',
	];

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
