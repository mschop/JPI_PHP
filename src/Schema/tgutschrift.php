<?php

namespace App\Schema;

class tgutschrift
{
	const TABLE_NAME = 'tgutschrift';
	const kGutschrift = 'kGutschrift';
	const kRechnung = 'kRechnung';
	const kKunde = 'kKunde';
	const cGutschriftNr = 'cGutschriftNr';
	const cKurzText = 'cKurzText';
	const cText = 'cText';
	const fPreis = 'fPreis';
	const fMwSt = 'fMwSt';
	const dErstellt = 'dErstellt';
	const cErloeskonto = 'cErloeskonto';
	const nErweitert = 'nErweitert';
	const cWaehrung = 'cWaehrung';
	const fFaktor = 'fFaktor';
	const kFirma = 'kFirma';
	const kSprache = 'kSprache';
	const kBenutzer = 'kBenutzer';
	const cStatus = 'cStatus';
	const kRechnungsAdresse = 'kRechnungsAdresse';
	const kPlattform = 'kPlattform';
	const cVersandlandWaehrung = 'cVersandlandWaehrung';
	const fVersandlandWaehrungFaktor = 'fVersandlandWaehrungFaktor';
	const dDruckdatum = 'dDruckdatum';
	const dMaildatum = 'dMaildatum';
	const COLUMN_NAMES = [
		'kGutschrift',
		'kRechnung',
		'kKunde',
		'cGutschriftNr',
		'cKurzText',
		'cText',
		'fPreis',
		'fMwSt',
		'dErstellt',
		'cErloeskonto',
		'nErweitert',
		'cWaehrung',
		'fFaktor',
		'kFirma',
		'kSprache',
		'kBenutzer',
		'cStatus',
		'kRechnungsAdresse',
		'kPlattform',
		'cVersandlandWaehrung',
		'fVersandlandWaehrungFaktor',
		'dDruckdatum',
		'dMaildatum',
	];
	const COLUMN_TYPES = [
		'kGutschrift' => 'int',
		'kRechnung' => 'int',
		'kKunde' => 'int',
		'cGutschriftNr' => 'varchar',
		'cKurzText' => 'varchar',
		'cText' => 'varchar',
		'fPreis' => 'decimal',
		'fMwSt' => 'decimal',
		'dErstellt' => 'datetime',
		'cErloeskonto' => 'varchar',
		'nErweitert' => 'tinyint',
		'cWaehrung' => 'varchar',
		'fFaktor' => 'decimal',
		'kFirma' => 'int',
		'kSprache' => 'int',
		'kBenutzer' => 'int',
		'cStatus' => 'varchar',
		'kRechnungsAdresse' => 'int',
		'kPlattform' => 'int',
		'cVersandlandWaehrung' => 'varchar',
		'fVersandlandWaehrungFaktor' => 'decimal',
		'dDruckdatum' => 'datetime',
		'dMaildatum' => 'datetime',
	];

	/** @var int kGutschrift */
	public $kGutschrift;

	/** @var int kRechnung */
	public $kRechnung;

	/** @var int kKunde */
	public $kKunde;

	/** @var string cGutschriftNr */
	public $cGutschriftNr;

	/** @var string cKurzText */
	public $cKurzText;

	/** @var string cText */
	public $cText;

	/** @var string fPreis */
	public $fPreis;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cErloeskonto */
	public $cErloeskonto;

	/** @var int nErweitert */
	public $nErweitert;

	/** @var string cWaehrung */
	public $cWaehrung;

	/** @var string fFaktor */
	public $fFaktor;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kSprache */
	public $kSprache;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cStatus */
	public $cStatus;

	/** @var int kRechnungsAdresse */
	public $kRechnungsAdresse;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var string cVersandlandWaehrung */
	public $cVersandlandWaehrung;

	/** @var string fVersandlandWaehrungFaktor */
	public $fVersandlandWaehrungFaktor;

	/** @var string dDruckdatum */
	public $dDruckdatum;

	/** @var string dMaildatum */
	public $dMaildatum;
}
