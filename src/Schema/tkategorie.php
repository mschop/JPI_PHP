<?php

namespace App\Schema;

class tkategorie
{
	const TABLE_NAME = 'tkategorie';
	const kKategorie = 'kKategorie';
	const kOberKategorie = 'kOberKategorie';
	const cInet = 'cInet';
	const cAktiv = 'cAktiv';
	const cDelInet = 'cDelInet';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kKategorie', 'kOberKategorie', 'cInet', 'cAktiv', 'cDelInet', 'nSort'];
	const COLUMN_TYPES = [
		'kKategorie' => 'int',
		'kOberKategorie' => 'int',
		'cInet' => 'char',
		'cAktiv' => 'char',
		'cDelInet' => 'char',
		'nSort' => 'int',
	];

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kOberKategorie */
	public $kOberKategorie;

	/** @var string cInet */
	public $cInet;

	/** @var string cAktiv */
	public $cAktiv;

	/** @var string cDelInet */
	public $cDelInet;

	/** @var int nSort */
	public $nSort;
}
