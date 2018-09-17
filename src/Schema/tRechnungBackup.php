<?php

namespace App\Schema;

class tRechnungBackup
{
	const TABLE_NAME = 'tRechnungBackup';
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
