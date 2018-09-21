<?php

namespace App\Schema;

class ameise_importvorgang
{
	const TABLE_NAME = 'ameise_importvorgang';
	const kImportVorgang = 'kImportVorgang';
	const kImportVorlage = 'kImportVorlage';
	const kImportTyp = 'kImportTyp';
	const nAbZeile = 'nAbZeile';
	const nAnzahlImportiert = 'nAnzahlImportiert';
	const nAnzahlAktualisiert = 'nAnzahlAktualisiert';
	const nAnzahlWarnungen = 'nAnzahlWarnungen';
	const nAnzahlFehler = 'nAnzahlFehler';
	const nDauer = 'nDauer';
	const nStatus = 'nStatus';
	const cImportdatei = 'cImportdatei';
	const dErstellt = 'dErstellt';
	const cMandant = 'cMandant';
	const COLUMN_NAMES = [
		'kImportVorgang',
		'kImportVorlage',
		'kImportTyp',
		'nAbZeile',
		'nAnzahlImportiert',
		'nAnzahlAktualisiert',
		'nAnzahlWarnungen',
		'nAnzahlFehler',
		'nDauer',
		'nStatus',
		'cImportdatei',
		'dErstellt',
		'cMandant',
	];
	const COLUMN_TYPES = [
		'kImportVorgang' => 'int',
		'kImportVorlage' => 'int',
		'kImportTyp' => 'int',
		'nAbZeile' => 'int',
		'nAnzahlImportiert' => 'int',
		'nAnzahlAktualisiert' => 'int',
		'nAnzahlWarnungen' => 'int',
		'nAnzahlFehler' => 'int',
		'nDauer' => 'int',
		'nStatus' => 'tinyint',
		'cImportdatei' => 'varchar',
		'dErstellt' => 'datetime',
		'cMandant' => 'varchar',
	];

	/** @var int kImportVorgang */
	public $kImportVorgang;

	/** @var int kImportVorlage */
	public $kImportVorlage;

	/** @var int kImportTyp */
	public $kImportTyp;

	/** @var int nAbZeile */
	public $nAbZeile;

	/** @var int nAnzahlImportiert */
	public $nAnzahlImportiert;

	/** @var int nAnzahlAktualisiert */
	public $nAnzahlAktualisiert;

	/** @var int nAnzahlWarnungen */
	public $nAnzahlWarnungen;

	/** @var int nAnzahlFehler */
	public $nAnzahlFehler;

	/** @var int nDauer */
	public $nDauer;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cImportdatei */
	public $cImportdatei;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cMandant */
	public $cMandant;
}
