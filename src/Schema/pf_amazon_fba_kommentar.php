<?php

namespace App\Schema;

class pf_amazon_fba_kommentar
{
	const TABLE_NAME = 'pf_amazon_fba_kommentar';
	const kUser = 'kUser';
	const kSprache = 'kSprache';
	const cFBAKommentar = 'cFBAKommentar';
	const COLUMN_NAMES = ['kUser', 'kSprache', 'cFBAKommentar'];
	const COLUMN_TYPES = ['kUser' => 'int', 'kSprache' => 'int', 'cFBAKommentar' => 'varchar'];

	/** @var int kUser */
	public $kUser;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cFBAKommentar */
	public $cFBAKommentar;
}
