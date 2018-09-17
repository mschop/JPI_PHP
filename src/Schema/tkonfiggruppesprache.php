<?php

namespace App\Schema;

class tkonfiggruppesprache
{
	const TABLE_NAME = 'tkonfiggruppesprache';
	const kKonfiggruppe = 'kKonfiggruppe';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';

	/** @var int kKonfiggruppe */
	public $kKonfiggruppe;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
