<?php

namespace App\Schema;

class tPicklisteStatus
{
	const TABLE_NAME = 'tPicklisteStatus';
	const kPicklisteStatus = 'kPicklisteStatus';
	const kPickliste = 'kPickliste';
	const kBenutzer = 'kBenutzer';
	const dZeitstempel = 'dZeitstempel';
	const nStatus = 'nStatus';
	const COLUMN_NAMES = ['kPicklisteStatus', 'kPickliste', 'kBenutzer', 'dZeitstempel', 'nStatus'];
	const COLUMN_TYPES = [
		'kPicklisteStatus' => 'int',
		'kPickliste' => 'int',
		'kBenutzer' => 'int',
		'dZeitstempel' => 'datetime',
		'nStatus' => 'int',
	];

	/** @var int kPicklisteStatus */
	public $kPicklisteStatus;

	/** @var int kPickliste */
	public $kPickliste;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int nStatus */
	public $nStatus;
}
