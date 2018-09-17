<?php

namespace App\Schema;

class tWaehrungAlt
{
	const TABLE_NAME = 'tWaehrungAlt';
	const kWaehrung = 'kWaehrung';
	const dAktualisiert = 'dAktualisiert';
	const fFaktorAlt = 'fFaktorAlt';
	const fFaktorNeu = 'fFaktorNeu';

	/** @var int kWaehrung */
	public $kWaehrung;

	/** @var string dAktualisiert */
	public $dAktualisiert;

	/** @var string fFaktorAlt */
	public $fFaktorAlt;

	/** @var string fFaktorNeu */
	public $fFaktorNeu;
}
