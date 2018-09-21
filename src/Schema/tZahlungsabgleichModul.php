<?php

namespace App\Schema;

class tZahlungsabgleichModul
{
	const TABLE_NAME = 'tZahlungsabgleichModul';
	const kZahlungsabgleichModul = 'kZahlungsabgleichModul';
	const cModulID = 'cModulID';
	const cEinstellungen = 'cEinstellungen';
	const COLUMN_NAMES = ['kZahlungsabgleichModul', 'cModulID', 'cEinstellungen'];
	const COLUMN_TYPES = ['kZahlungsabgleichModul' => 'int', 'cModulID' => 'varchar', 'cEinstellungen' => 'varchar'];

	/** @var int kZahlungsabgleichModul */
	public $kZahlungsabgleichModul;

	/** @var string cModulID */
	public $cModulID;

	/** @var string cEinstellungen */
	public $cEinstellungen;
}
