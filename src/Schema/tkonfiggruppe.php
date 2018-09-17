<?php

namespace App\Schema;

class tkonfiggruppe
{
	const TABLE_NAME = 'tkonfiggruppe';
	const kKonfiggruppe = 'kKonfiggruppe';
	const bild = 'bild';
	const nMin = 'nMin';
	const nMax = 'nMax';
	const nTyp = 'nTyp';
	const nSort = 'nSort';
	const cKommentar = 'cKommentar';

	/** @var int kKonfiggruppe */
	public $kKonfiggruppe;

	/** @var resource bild */
	public $bild;

	/** @var int nMin */
	public $nMin;

	/** @var int nMax */
	public $nMax;

	/** @var int nTyp */
	public $nTyp;

	/** @var int nSort */
	public $nSort;

	/** @var string cKommentar */
	public $cKommentar;
}
