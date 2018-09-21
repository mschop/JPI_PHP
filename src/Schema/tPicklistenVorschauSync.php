<?php

namespace App\Schema;

class tPicklistenVorschauSync
{
	const TABLE_NAME = 'tPicklistenVorschauSync';
	const kPicklisteVorlage = 'kPicklisteVorlage';
	const dLastUpdate = 'dLastUpdate';
	const nAnzahl = 'nAnzahl';
	const COLUMN_NAMES = ['kPicklisteVorlage', 'dLastUpdate', 'nAnzahl'];
	const COLUMN_TYPES = ['kPicklisteVorlage' => 'int', 'dLastUpdate' => 'datetime', 'nAnzahl' => 'int'];

	/** @var int kPicklisteVorlage */
	public $kPicklisteVorlage;

	/** @var string dLastUpdate */
	public $dLastUpdate;

	/** @var int nAnzahl */
	public $nAnzahl;
}
