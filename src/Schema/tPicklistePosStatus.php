<?php

namespace App\Schema;

class tPicklistePosStatus
{
	const TABLE_NAME = 'tPicklistePosStatus';
	const kPicklistePosStatus = 'kPicklistePosStatus';
	const kPicklistePos = 'kPicklistePos';
	const kbenutzer = 'kbenutzer';
	const dZeitstempel = 'dZeitstempel';
	const nStatus = 'nStatus';
	const COLUMN_NAMES = ['kPicklistePosStatus', 'kPicklistePos', 'kbenutzer', 'dZeitstempel', 'nStatus'];
	const COLUMN_TYPES = [
		'kPicklistePosStatus' => 'int',
		'kPicklistePos' => 'int',
		'kbenutzer' => 'int',
		'dZeitstempel' => 'datetime',
		'nStatus' => 'int',
	];

	/** @var int kPicklistePosStatus */
	public $kPicklistePosStatus;

	/** @var int kPicklistePos */
	public $kPicklistePos;

	/** @var int kbenutzer */
	public $kbenutzer;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int nStatus */
	public $nStatus;
}
