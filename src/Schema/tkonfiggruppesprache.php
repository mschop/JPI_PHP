<?php

namespace App\Schema;

class tkonfiggruppesprache
{
	const TABLE_NAME = 'tkonfiggruppesprache';
	const kKonfiggruppe = 'kKonfiggruppe';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const COLUMN_NAMES = ['kKonfiggruppe', 'kSprache', 'cName', 'cBeschreibung'];
	const COLUMN_TYPES = ['kKonfiggruppe' => 'int', 'kSprache' => 'int', 'cName' => 'varchar', 'cBeschreibung' => 'varchar'];

	/** @var int kKonfiggruppe */
	public $kKonfiggruppe;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
