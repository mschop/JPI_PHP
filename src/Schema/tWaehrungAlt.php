<?php

namespace App\Schema;

class tWaehrungAlt
{
	const TABLE_NAME = 'tWaehrungAlt';
	const kWaehrung = 'kWaehrung';
	const dAktualisiert = 'dAktualisiert';
	const fFaktorAlt = 'fFaktorAlt';
	const fFaktorNeu = 'fFaktorNeu';
	const COLUMN_NAMES = ['kWaehrung', 'dAktualisiert', 'fFaktorAlt', 'fFaktorNeu'];
	const COLUMN_TYPES = [
		'kWaehrung' => 'int',
		'dAktualisiert' => 'datetime',
		'fFaktorAlt' => 'decimal',
		'fFaktorNeu' => 'decimal',
	];

	/** @var int kWaehrung */
	public $kWaehrung;

	/** @var string dAktualisiert */
	public $dAktualisiert;

	/** @var string fFaktorAlt */
	public $fFaktorAlt;

	/** @var string fFaktorNeu */
	public $fFaktorNeu;
}
