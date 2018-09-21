<?php

namespace App\Schema;

class tAdressExportVorlage
{
	const TABLE_NAME = 'tAdressExportVorlage';
	const kAdressExportVorlage = 'kAdressExportVorlage';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const nStandard = 'nStandard';
	const dErstellt = 'dErstellt';
	const cTrennzeichen = 'cTrennzeichen';
	const cKomma = 'cKomma';
	const nKopfzeile = 'nKopfzeile';
	const cPfad = 'cPfad';
	const nZusatzzeile = 'nZusatzzeile';
	const COLUMN_NAMES = [
		'kAdressExportVorlage',
		'cName',
		'cBeschreibung',
		'nStandard',
		'dErstellt',
		'cTrennzeichen',
		'cKomma',
		'nKopfzeile',
		'cPfad',
		'nZusatzzeile',
	];
	const COLUMN_TYPES = [
		'kAdressExportVorlage' => 'int',
		'cName' => 'varchar',
		'cBeschreibung' => 'varchar',
		'nStandard' => 'tinyint',
		'dErstellt' => 'varchar',
		'cTrennzeichen' => 'varchar',
		'cKomma' => 'varchar',
		'nKopfzeile' => 'tinyint',
		'cPfad' => 'varchar',
		'nZusatzzeile' => 'tinyint',
	];

	/** @var int kAdressExportVorlage */
	public $kAdressExportVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int nStandard */
	public $nStandard;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cTrennzeichen */
	public $cTrennzeichen;

	/** @var string cKomma */
	public $cKomma;

	/** @var int nKopfzeile */
	public $nKopfzeile;

	/** @var string cPfad */
	public $cPfad;

	/** @var int nZusatzzeile */
	public $nZusatzzeile;
}
