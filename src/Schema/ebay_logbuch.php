<?php

namespace App\Schema;

class ebay_logbuch
{
	const TABLE_NAME = 'ebay_logbuch';
	const kEbayLogbuch = 'kEbayLogbuch';
	const kEbayuser = 'kEbayuser';
	const cBetreff = 'cBetreff';
	const nKategorie = 'nKategorie';
	const nTyp = 'nTyp';
	const cLog = 'cLog';
	const dZeit = 'dZeit';

	/** @var int kEbayLogbuch */
	public $kEbayLogbuch;

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var string cBetreff */
	public $cBetreff;

	/** @var int nKategorie */
	public $nKategorie;

	/** @var int nTyp */
	public $nTyp;

	/** @var string cLog */
	public $cLog;

	/** @var string dZeit */
	public $dZeit;
}
