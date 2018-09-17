<?php

namespace App\Schema;

class tAttributSprache
{
	const TABLE_NAME = 'tAttributSprache';
	const kAttribut = 'kAttribut';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cWertListe = 'cWertListe';

	/** @var int kAttribut */
	public $kAttribut;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cWertListe */
	public $cWertListe;
}
