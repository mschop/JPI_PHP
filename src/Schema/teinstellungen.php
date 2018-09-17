<?php

namespace App\Schema;

class teinstellungen
{
	const TABLE_NAME = 'teinstellungen';
	const kEinstellungen = 'kEinstellungen';
	const cKopfPic = 'cKopfPic';
	const cDrucker = 'cDrucker';
	const fMwSt = 'fMwSt';
	const nZahlungsziel = 'nZahlungsziel';
	const cFax = 'cFax';
	const cLagerbestand = 'cLagerbestand';
	const cLootSize = 'cLootSize';
	const cLagerKleinerNull = 'cLagerKleinerNull';
	const cFaxParam = 'cFaxParam';
	const cRechnung2x = 'cRechnung2x';
	const cRechnungsDrucker = 'cRechnungsDrucker';
	const cUSt = 'cUSt';
	const cEtikettDrucker = 'cEtikettDrucker';
	const nRunden = 'nRunden';
	const nLog = 'nLog';
	const cLogPfad = 'cLogPfad';
	const cLieferschein2x = 'cLieferschein2x';
	const nLagerAnzahl = 'nLagerAnzahl';
	const cBeschreibung = 'cBeschreibung';
	const nAuftragAendern = 'nAuftragAendern';
	const nSNAbfragen = 'nSNAbfragen';

	/** @var int kEinstellungen */
	public $kEinstellungen;

	/** @var string cKopfPic */
	public $cKopfPic;

	/** @var string cDrucker */
	public $cDrucker;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var int nZahlungsziel */
	public $nZahlungsziel;

	/** @var string cFax */
	public $cFax;

	/** @var string cLagerbestand */
	public $cLagerbestand;

	/** @var string cLootSize */
	public $cLootSize;

	/** @var string cLagerKleinerNull */
	public $cLagerKleinerNull;

	/** @var string cFaxParam */
	public $cFaxParam;

	/** @var string cRechnung2x */
	public $cRechnung2x;

	/** @var string cRechnungsDrucker */
	public $cRechnungsDrucker;

	/** @var string cUSt */
	public $cUSt;

	/** @var string cEtikettDrucker */
	public $cEtikettDrucker;

	/** @var string nRunden */
	public $nRunden;

	/** @var int nLog */
	public $nLog;

	/** @var string cLogPfad */
	public $cLogPfad;

	/** @var string cLieferschein2x */
	public $cLieferschein2x;

	/** @var int nLagerAnzahl */
	public $nLagerAnzahl;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int nAuftragAendern */
	public $nAuftragAendern;

	/** @var int nSNAbfragen */
	public $nSNAbfragen;
}
