<?php

namespace App\Schema;

class tVersandKonfigurationArtikelZustand
{
	const TABLE_NAME = 'tVersandKonfigurationArtikelZustand';
	const kVersandKonfiguration = 'kVersandKonfiguration';
	const kZustand = 'kZustand';
	const COLUMN_NAMES = ['kVersandKonfiguration', 'kZustand'];
	const COLUMN_TYPES = ['kVersandKonfiguration' => 'int', 'kZustand' => 'int'];

	/** @var int kVersandKonfiguration */
	public $kVersandKonfiguration;

	/** @var int kZustand */
	public $kZustand;
}
