<?php

namespace App\Schema;

class tZahlungsabgleichLogeintrag
{
	const TABLE_NAME = 'tZahlungsabgleichLogeintrag';
	const kZahlungsabgleichLogeintrag = 'kZahlungsabgleichLogeintrag';
	const kZahlungsabgleichLogsitzung = 'kZahlungsabgleichLogsitzung';
	const dZeitpunkt = 'dZeitpunkt';
	const nSchweregrad = 'nSchweregrad';
	const cMeldung = 'cMeldung';
	const kZahlungsabgleichModul = 'kZahlungsabgleichModul';
	const cKontoIdentifikation = 'cKontoIdentifikation';

	/** @var int kZahlungsabgleichLogeintrag */
	public $kZahlungsabgleichLogeintrag;

	/** @var int kZahlungsabgleichLogsitzung */
	public $kZahlungsabgleichLogsitzung;

	/** @var string dZeitpunkt */
	public $dZeitpunkt;

	/** @var int nSchweregrad */
	public $nSchweregrad;

	/** @var string cMeldung */
	public $cMeldung;

	/** @var int kZahlungsabgleichModul */
	public $kZahlungsabgleichModul;

	/** @var string cKontoIdentifikation */
	public $cKontoIdentifikation;
}
