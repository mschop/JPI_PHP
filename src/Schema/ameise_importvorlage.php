<?php

namespace App\Schema;

class ameise_importvorlage
{
	const TABLE_NAME = 'ameise_importvorlage';
	const kImportVorlage = 'kImportVorlage';
	const kImportTyp = 'kImportTyp';
	const kStandardVorlage = 'kStandardVorlage';
	const cName = 'cName';
	const nDateiformat = 'nDateiformat';
	const nSpaltenbegrenzer = 'nSpaltenbegrenzer';
	const nAbZeile = 'nAbZeile';
	const nKopfzeile = 'nKopfzeile';
	const nQuote = 'nQuote';
	const nEscape = 'nEscape';
	const cUebersicht = 'cUebersicht';
	const dErstellt = 'dErstellt';
	const nDeleted = 'nDeleted';

	/** @var int kImportVorlage */
	public $kImportVorlage;

	/** @var int kImportTyp */
	public $kImportTyp;

	/** @var int kStandardVorlage */
	public $kStandardVorlage;

	/** @var string cName */
	public $cName;

	/** @var int nDateiformat */
	public $nDateiformat;

	/** @var int nSpaltenbegrenzer */
	public $nSpaltenbegrenzer;

	/** @var int nAbZeile */
	public $nAbZeile;

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
}
