<?php

namespace App\Schema;

class tVersandKonfigurationArtikelZustand
{
	const TABLE_NAME = 'tVersandKonfigurationArtikelZustand';
	const kVersandKonfiguration = 'kVersandKonfiguration';
	const kZustand = 'kZustand';

	/** @var int kVersandKonfiguration */
	public $kVersandKonfiguration;

	/** @var int kZustand */
	public $kZustand;
}
