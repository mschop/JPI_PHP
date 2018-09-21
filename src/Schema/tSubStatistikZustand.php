<?php

namespace App\Schema;

class tSubStatistikZustand
{
	const TABLE_NAME = 'tSubStatistikZustand';
	const kBenutzer = 'kBenutzer';
	const kSubStatistik = 'kSubStatistik';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kBenutzer', 'kSubStatistik', 'cWert'];
	const COLUMN_TYPES = ['kBenutzer' => 'int', 'kSubStatistik' => 'tinyint', 'cWert' => 'varchar'];

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kSubStatistik */
	public $kSubStatistik;

	/** @var string cWert */
	public $cWert;
}
