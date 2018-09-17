<?php

namespace App\Schema;

class tZahlungsErinnerung
{
	const TABLE_NAME = 'tZahlungsErinnerung';
	const kZahlungsErinnerung = 'kZahlungsErinnerung';
	const kRechnung = 'kRechnung';
	const kMahnstufe = 'kMahnstufe';
	const kFirma = 'kFirma';
	const kKundengruppe = 'kKundengruppe';
	const nMahnstufeAktuell = 'nMahnstufeAktuell';
	const dZahlungsfrist = 'dZahlungsfrist';
	const dErstellt = 'dErstellt';
	const dMahndatum = 'dMahndatum';
	const dErledigt = 'dErledigt';
	const fGebuehr = 'fGebuehr';
	const nKarenzzeit = 'nKarenzzeit';
	const nZahlungsfristInTagen = 'nZahlungsfristInTagen';
	const fGebuehrPauschal = 'fGebuehrPauschal';
	const fGebuehrZinssatz = 'fGebuehrZinssatz';
	const cKommentar = 'cKommentar';
	const fBruttoBetrag = 'fBruttoBetrag';
	const kBenutzer = 'kBenutzer';

	/** @var int kZahlungsErinnerung */
	public $kZahlungsErinnerung;

	/** @var int kRechnung */
	public $kRechnung;

	/** @var int kMahnstufe */
	public $kMahnstufe;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kKundengruppe */
	public $kKundengruppe;

	/** @var int nMahnstufeAktuell */
	public $nMahnstufeAktuell;

	/** @var string dZahlungsfrist */
	public $dZahlungsfrist;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dMahndatum */
	public $dMahndatum;

	/** @var string dErledigt */
	public $dErledigt;

	/** @var string fGebuehr */
	public $fGebuehr;

	/** @var int nKarenzzeit */
	public $nKarenzzeit;

	/** @var int nZahlungsfristInTagen */
	public $nZahlungsfristInTagen;

	/** @var string fGebuehrPauschal */
	public $fGebuehrPauschal;

	/** @var string fGebuehrZinssatz */
	public $fGebuehrZinssatz;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var string fBruttoBetrag */
	public $fBruttoBetrag;

	/** @var int kBenutzer */
	public $kBenutzer;
}
