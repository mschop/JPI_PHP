<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kGutschrift' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRechnung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cGutschriftNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cKurzText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4000,
			'characterSetName' => 'iso_1',
		],
		'fPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMwSt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cErloeskonto' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'nErweitert' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWaehrung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'fFaktor' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cStatus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kRechnungsAdresse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVersandlandWaehrung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'fVersandlandWaehrungFaktor' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dDruckdatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dMaildatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
