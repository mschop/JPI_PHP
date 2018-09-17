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
