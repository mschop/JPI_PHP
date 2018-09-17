<?php

namespace App\Schema;

class tSubStatistikZustand
{
	const TABLE_NAME = 'tSubStatistikZustand';
	const kBenutzer = 'kBenutzer';
	const kSubStatistik = 'kSubStatistik';
	const cWert = 'cWert';

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kSubStatistik */
	public $kSubStatistik;

	/** @var string cWert */
	public $cWert;
}
