<?php

namespace App\Schema;

class ameise_exportvorgang
{
	const TABLE_NAME = 'ameise_exportvorgang';
	const kExportVorgang = 'kExportVorgang';
	const kExportVorlage = 'kExportVorlage';
	const kExportTyp = 'kExportTyp';
	const nAnzahlExportiert = 'nAnzahlExportiert';
	const nAnzahlExportiertVon = 'nAnzahlExportiertVon';
	const nDauer = 'nDauer';
	const nStatus = 'nStatus';
	const cDatei = 'cDatei';
	const dErstellt = 'dErstellt';
	const cMandant = 'cMandant';

	/** @var int kExportVorgang */
	public $kExportVorgang;

	/** @var int kExportVorlage */
	public $kExportVorlage;

	/** @var int kExportTyp */
	public $kExportTyp;

	/** @var int nAnzahlExportiert */
	public $nAnzahlExportiert;

	/** @var int nAnzahlExportiertVon */
	public $nAnzahlExportiertVon;

	/** @var int nDauer */
	public $nDauer;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cDatei */
	public $cDatei;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cMandant */
	public $cMandant;
}
