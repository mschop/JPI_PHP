<?php

namespace App\Schema;

class tZustandKategorie
{
	const TABLE_NAME = 'tZustandKategorie';
	const kZustandKategorie = 'kZustandKategorie';
	const kZustand = 'kZustand';
	const kKategorie = 'kKategorie';
	const nIstMarkiert = 'nIstMarkiert';
	const COLUMN_NAMES = ['kZustandKategorie', 'kZustand', 'kKategorie', 'nIstMarkiert'];
	const COLUMN_TYPES = [
		'kZustandKategorie' => 'int',
		'kZustand' => 'int',
		'kKategorie' => 'int',
		'nIstMarkiert' => 'tinyint',
	];

	/** @var int kZustandKategorie */
	public $kZustandKategorie;

	/** @var int kZustand */
	public $kZustand;

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int nIstMarkiert */
	public $nIstMarkiert;
}
