<?php

namespace App\Schema;

class tBestellungPicklisteLock
{
	const TABLE_NAME = 'tBestellungPicklisteLock';
	const kBestellung = 'kBestellung';
	const kPickliste = 'kPickliste';
	const dZeitstempel = 'dZeitstempel';
	const COLUMN_NAMES = ['kBestellung', 'kPickliste', 'dZeitstempel'];
	const COLUMN_TYPES = ['kBestellung' => 'int', 'kPickliste' => 'int', 'dZeitstempel' => 'datetime'];

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kPickliste */
	public $kPickliste;

	/** @var string dZeitstempel */
	public $dZeitstempel;
}
