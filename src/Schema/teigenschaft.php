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
	const COLUMN_NAMES = ['kEigenschaft', 'kArtikel', 'cWaehlbar', 'nSort', 'cTyp', 'cAktiv'];
	const COLUMN_TYPES = [
		'kEigenschaft' => 'int',
		'kArtikel' => 'int',
		'cWaehlbar' => 'char',
		'nSort' => 'int',
		'cTyp' => 'varchar',
		'cAktiv' => 'char',
	];

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
