<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kRechnung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'tBenutzer_kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'tBestellung_kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'tKunde_kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRechnungsNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cBezahlt' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nZahlungsziel' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cStatus' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cErloeskonto' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nInkassoStatus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dEmailversandt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
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
		'nMahnstopp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
