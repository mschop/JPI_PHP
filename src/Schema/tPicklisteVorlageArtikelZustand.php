<?php

namespace App\Schema;

class tPicklisteVorlageArtikelZustand
{
	const TABLE_NAME = 'tPicklisteVorlageArtikelZustand';
	const kPicklisteVorlage = 'kPicklisteVorlage';
	const kZustand = 'kZustand';
	const COLUMN_NAMES = ['kPicklisteVorlage', 'kZustand'];
	const COLUMN_TYPES = ['kPicklisteVorlage' => 'int', 'kZustand' => 'int'];

	/** @var int kPicklisteVorlage */
	public $kPicklisteVorlage;

	/** @var int kZustand */
	public $kZustand;
}
