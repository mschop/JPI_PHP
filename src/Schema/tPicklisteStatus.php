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
