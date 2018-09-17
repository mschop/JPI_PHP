<?php

namespace App\Schema;

class teigenschaft
{
	const TABLE_NAME = 'teigenschaft';
	const kEigenschaft = 'kEigenschaft';
	const kArtikel = 'kArtikel';
	const cWaehlbar = 'cWaehlbar';
	const nSort = 'nSort';
	const cTyp = 'cTyp';
	const cAktiv = 'cAktiv';

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cWaehlbar */
	public $cWaehlbar;

	/** @var int nSort */
	public $nSort;

	/** @var string cTyp */
	public $cTyp;

	/** @var string cAktiv */
	public $cAktiv;
}
