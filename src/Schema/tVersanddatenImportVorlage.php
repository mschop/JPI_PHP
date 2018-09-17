<?php

namespace App\Schema;

class tVersanddatenImportVorlage
{
	const TABLE_NAME = 'tVersanddatenImportVorlage';
	const kVersanddatenImportVorlage = 'kVersanddatenImportVorlage';
	const cName = 'cName';
	const cTrennzeichen = 'cTrennzeichen';
	const nKopfzeilen = 'nKopfzeilen';
	const cDatumsFormat = 'cDatumsFormat';
	const nSpalteId = 'nSpalteId';
	const nSpalteVersandDatum = 'nSpalteVersandDatum';
	const nSpalteTrackingNummer = 'nSpalteTrackingNummer';
	const nSpalteVersandInfo = 'nSpalteVersandInfo';

	/** @var int kVersanddatenImportVorlage */
	public $kVersanddatenImportVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cTrennzeichen */
	public $cTrennzeichen;

	/** @var int nKopfzeilen */
	public $nKopfzeilen;

	/** @var string cDatumsFormat */
	public $cDatumsFormat;

	/** @var int nSpalteId */
	public $nSpalteId;

	/** @var int nSpalteVersandDatum */
	public $nSpalteVersandDatum;

	/** @var int nSpalteTrackingNummer */
	public $nSpalteTrackingNummer;

	/** @var int nSpalteVersandInfo */
	public $nSpalteVersandInfo;
}
