<?php

namespace App\Schema;

class tZustandKategorie
{
	const TABLE_NAME = 'tZustandKategorie';
	const kZustandKategorie = 'kZustandKategorie';
	const kZustand = 'kZustand';
	const kKategorie = 'kKategorie';
	const nIstMarkiert = 'nIstMarkiert';

	/** @var int kZustandKategorie */
	public $kZustandKategorie;

	/** @var int kZustand */
	public $kZustand;

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int nIstMarkiert */
	public $nIstMarkiert;
}
