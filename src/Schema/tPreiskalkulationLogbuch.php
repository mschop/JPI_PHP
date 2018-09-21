<?php

namespace App\Schema;

class tPreiskalkulationLogbuch
{
	const TABLE_NAME = 'tPreiskalkulationLogbuch';
	const kLogbuch = 'kLogbuch';
	const cPlattform = 'cPlattform';
	const cKategorie = 'cKategorie';
	const cBetreff = 'cBetreff';
	const cLog = 'cLog';
	const dZeit = 'dZeit';
	const cArtikel = 'cArtikel';
	const cArtNr = 'cArtNr';
	const kUSer = 'kUSer';
	const COLUMN_NAMES = ['kLogbuch', 'cPlattform', 'cKategorie', 'cBetreff', 'cLog', 'dZeit', 'cArtikel', 'cArtNr', 'kUSer'];
	const COLUMN_TYPES = [
		'kLogbuch' => 'int',
		'cPlattform' => 'varchar',
		'cKategorie' => 'varchar',
		'cBetreff' => 'varchar',
		'cLog' => 'varchar',
		'dZeit' => 'datetime',
		'cArtikel' => 'varchar',
		'cArtNr' => 'varchar',
		'kUSer' => 'int',
	];

	/** @var int kLogbuch */
	public $kLogbuch;

	/** @var string cPlattform */
	public $cPlattform;

	/** @var string cKategorie */
	public $cKategorie;

	/** @var string cBetreff */
	public $cBetreff;

	/** @var string cLog */
	public $cLog;

	/** @var string dZeit */
	public $dZeit;

	/** @var string cArtikel */
	public $cArtikel;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var int kUSer */
	public $kUSer;
}
