<?php

namespace App\Schema;

class tWMSVersandLock
{
	const TABLE_NAME = 'tWMSVersandLock';
	const kWMSVersandLock = 'kWMSVersandLock';
	const kPickliste = 'kPickliste';
	const kBestellung = 'kBestellung';
	const nSort = 'nSort';
	const kBenutzer = 'kBenutzer';
	const dDatum = 'dDatum';

	/** @var int kWMSVersandLock */
	public $kWMSVersandLock;

	/** @var int kPickliste */
	public $kPickliste;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int nSort */
	public $nSort;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dDatum */
	public $dDatum;
}
