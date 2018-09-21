<?php

namespace App\Schema;

class tdblog
{
	const TABLE_NAME = 'tdblog';
	const cKategorie = 'cKategorie';
	const cException = 'cException';
	const cInfo = 'cInfo';
	const dZeit = 'dZeit';
	const COLUMN_NAMES = ['cKategorie', 'cException', 'cInfo', 'dZeit'];
	const COLUMN_TYPES = ['cKategorie' => 'varchar', 'cException' => 'varchar', 'cInfo' => 'varchar', 'dZeit' => 'datetime'];

	/** @var string cKategorie */
	public $cKategorie;

	/** @var string cException */
	public $cException;

	/** @var string cInfo */
	public $cInfo;

	/** @var string dZeit */
	public $dZeit;
}
