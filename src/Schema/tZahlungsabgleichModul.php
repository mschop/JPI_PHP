<?php

namespace App\Schema;

class tZahlungsabgleichModul
{
	const TABLE_NAME = 'tZahlungsabgleichModul';
	const kZahlungsabgleichModul = 'kZahlungsabgleichModul';
	const cModulID = 'cModulID';
	const cEinstellungen = 'cEinstellungen';

	/** @var int kZahlungsabgleichModul */
	public $kZahlungsabgleichModul;

	/** @var string cModulID */
	public $cModulID;

	/** @var string cEinstellungen */
	public $cEinstellungen;
}
