<?php

namespace App\Schema;

class pf_logbuch
{
	const TABLE_NAME = 'pf_logbuch';
	const kLogbuch = 'kLogbuch';
	const kPlattform = 'kPlattform';
	const cKategorie = 'cKategorie';
	const cBetreff = 'cBetreff';
	const cLog = 'cLog';
	const dZeit = 'dZeit';
	const kUser = 'kUser';

	/** @var int kLogbuch */
	public $kLogbuch;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var string cKategorie */
	public $cKategorie;

	/** @var string cBetreff */
	public $cBetreff;

	/** @var string cLog */
	public $cLog;

	/** @var string dZeit */
	public $dZeit;

	/** @var int kUser */
	public $kUser;
}
