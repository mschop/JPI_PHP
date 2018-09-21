<?php

namespace App\Schema;

class tPicklisteVorlageEigeneFelder
{
	const TABLE_NAME = 'tPicklisteVorlageEigeneFelder';
	const kPicklisteVorlage = 'kPicklisteVorlage';
	const kAttribut = 'kAttribut';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kPicklisteVorlage', 'kAttribut', 'cWert'];
	const COLUMN_TYPES = ['kPicklisteVorlage' => 'int', 'kAttribut' => 'int', 'cWert' => 'varchar'];

	/** @var int kPicklisteVorlage */
	public $kPicklisteVorlage;

	/** @var int kAttribut */
	public $kAttribut;

	/** @var string cWert */
	public $cWert;
}
