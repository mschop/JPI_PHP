<?php

namespace App\Schema;

class ameise_exportvorlage
{
	const TABLE_NAME = 'ameise_exportvorlage';
	const kExportVorlage = 'kExportVorlage';
	const kExportTyp = 'kExportTyp';
	const kExportVorlageFilter = 'kExportVorlageFilter';
	const kStandardVorlage = 'kStandardVorlage';
	const cName = 'cName';
	const nDateiformat = 'nDateiformat';
	const nSpaltenbegrenzer = 'nSpaltenbegrenzer';
	const nKopfzeile = 'nKopfzeile';
	const nQuote = 'nQuote';
	const nEscape = 'nEscape';
	const cUebersicht = 'cUebersicht';
	const dErstellt = 'dErstellt';
	const nDeleted = 'nDeleted';
	const cExt = 'cExt';
	const nDezimalTrennzeichen = 'nDezimalTrennzeichen';
	const nTausenderTrennzeichen = 'nTausenderTrennzeichen';
	const nNachkommastellen = 'nNachkommastellen';

	/** @var int kExportVorlage */
	public $kExportVorlage;

	/** @var int kExportTyp */
	public $kExportTyp;

	/** @var int kExportVorlageFilter */
	public $kExportVorlageFilter;

	/** @var int kStandardVorlage */
	public $kStandardVorlage;

	/** @var string cName */
	public $cName;

	/** @var int nDateiformat */
	public $nDateiformat;

	/** @var int nSpaltenbegrenzer */
	public $nSpaltenbegrenzer;

	/** @var int nKopfzeile */
	public $nKopfzeile;

	/** @var int nQuote */
	public $nQuote;

	/** @var int nEscape */
	public $nEscape;

	/** @var string cUebersicht */
	public $cUebersicht;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nDeleted */
	public $nDeleted;

	/** @var string cExt */
	public $cExt;

	/** @var int nDezimalTrennzeichen */
	public $nDezimalTrennzeichen;

	/** @var int nTausenderTrennzeichen */
	public $nTausenderTrennzeichen;

	/** @var int nNachkommastellen */
	public $nNachkommastellen;
}
