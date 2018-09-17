<?php

namespace App\Schema;

class tBestellungSperre
{
	const TABLE_NAME = 'tBestellungSperre';
	const kBestellung = 'kBestellung';
	const cName = 'cName';

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string cName */
	public $cName;
}
