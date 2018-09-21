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
	const COLUMN_NAMES = ['kLogbuch', 'kPlattform', 'cKategorie', 'cBetreff', 'cLog', 'dZeit', 'kUser'];
	const COLUMN_TYPES = [
		'kLogbuch' => 'int',
		'kPlattform' => 'tinyint',
		'cKategorie' => 'varchar',
		'cBetreff' => 'varchar',
		'cLog' => 'varchar',
		'dZeit' => 'datetime',
		'kUser' => 'tinyint',
	];

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
