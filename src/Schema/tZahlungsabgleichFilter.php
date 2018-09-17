<?php

namespace App\Schema;

class tZahlungsabgleichFilter
{
	const TABLE_NAME = 'tZahlungsabgleichFilter';
	const kZahlungsabgleichFilter = 'kZahlungsabgleichFilter';
	const cBeschreibung = 'cBeschreibung';
	const kZahlungsabgleichModul = 'kZahlungsabgleichModul';
	const nUmsatzart = 'nUmsatzart';
	const nFilterspalte = 'nFilterspalte';
	const nFilteroperator = 'nFilteroperator';
	const cFilterwert = 'cFilterwert';
	const nAktion = 'nAktion';

	/** @var int kZahlungsabgleichFilter */
	public $kZahlungsabgleichFilter;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int kZahlungsabgleichModul */
	public $kZahlungsabgleichModul;

	/** @var int nUmsatzart */
	public $nUmsatzart;

	/** @var int nFilterspalte */
	public $nFilterspalte;

	/** @var int nFilteroperator */
	public $nFilteroperator;

	/** @var string cFilterwert */
	public $cFilterwert;

	/** @var int nAktion */
	public $nAktion;
}
