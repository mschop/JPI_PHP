<?php

namespace App\Schema;

class trechnung
{
	const TABLE_NAME = 'trechnung';
	const kRechnung = 'kRechnung';
	const tBenutzer_kBenutzer = 'tBenutzer_kBenutzer';
	const tBestellung_kBestellung = 'tBestellung_kBestellung';
	const tKunde_kKunde = 'tKunde_kKunde';
	const cRechnungsNr = 'cRechnungsNr';
	const cBezahlt = 'cBezahlt';
	const dErstellt = 'dErstellt';
	const nZahlungsziel = 'nZahlungsziel';
	const cStatus = 'cStatus';
	const cErloeskonto = 'cErloeskonto';
	const kFirma = 'kFirma';
	const nInkassoStatus = 'nInkassoStatus';
	const dEmailversandt = 'dEmailversandt';
	const dDruckdatum = 'dDruckdatum';
	const nMahnstopp = 'nMahnstopp';
	const COLUMN_NAMES = [
		'kRechnung',
		'tBenutzer_kBenutzer',
		'tBestellung_kBestellung',
		'tKunde_kKunde',
		'cRechnungsNr',
		'cBezahlt',
		'dErstellt',
		'nZahlungsziel',
		'cStatus',
		'cErloeskonto',
		'kFirma',
		'nInkassoStatus',
		'dEmailversandt',
		'dDruckdatum',
		'nMahnstopp',
	];
	const COLUMN_TYPES = [
		'kRechnung' => 'int',
		'tBenutzer_kBenutzer' => 'int',
		'tBestellung_kBestellung' => 'int',
		'tKunde_kKunde' => 'int',
		'cRechnungsNr' => 'varchar',
		'cBezahlt' => 'char',
		'dErstellt' => 'datetime',
		'nZahlungsziel' => 'tinyint',
		'cStatus' => 'char',
		'cErloeskonto' => 'varchar',
		'kFirma' => 'int',
		'nInkassoStatus' => 'tinyint',
		'dEmailversandt' => 'datetime',
		'dDruckdatum' => 'datetime',
		'nMahnstopp' => 'tinyint',
	];

	/** @var int kRechnung */
	public $kRechnung;

	/** @var int tBenutzer_kBenutzer */
	public $tBenutzer_kBenutzer;

	/** @var int tBestellung_kBestellung */
	public $tBestellung_kBestellung;

	/** @var int tKunde_kKunde */
	public $tKunde_kKunde;

	/** @var string cRechnungsNr */
	public $cRechnungsNr;

	/** @var string cBezahlt */
	public $cBezahlt;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nZahlungsziel */
	public $nZahlungsziel;

	/** @var string cStatus */
	public $cStatus;

	/** @var string cErloeskonto */
	public $cErloeskonto;

	/** @var int kFirma */
	public $kFirma;

	/** @var int nInkassoStatus */
	public $nInkassoStatus;

	/** @var string dEmailversandt */
	public $dEmailversandt;

	/** @var string dDruckdatum */
	public $dDruckdatum;

	/** @var int nMahnstopp */
	public $nMahnstopp;
}
