<?php

namespace App\Schema;

class tPicklistenVorschauSync
{
	const TABLE_NAME = 'tPicklistenVorschauSync';
	const kPicklisteVorlage = 'kPicklisteVorlage';
	const dLastUpdate = 'dLastUpdate';
	const nAnzahl = 'nAnzahl';

	/** @var int kPicklisteVorlage */
	public $kPicklisteVorlage;

	/** @var string dLastUpdate */
	public $dLastUpdate;

	/** @var int nAnzahl */
	public $nAnzahl;
}
