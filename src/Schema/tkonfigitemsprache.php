<?php

namespace App\Schema;

class tkonfigitemsprache
{
	const TABLE_NAME = 'tkonfigitemsprache';
	const kKonfigitem = 'kKonfigitem';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';

	/** @var int kKonfigitem */
	public $kKonfigitem;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
