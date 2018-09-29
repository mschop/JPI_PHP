<?php

namespace App\Db\Schema;

class tPreiskalkulationLogbuchDetails
{
	const TABLE_NAME = 'tPreiskalkulationLogbuchDetails';
	const kLogbuchDetails = 'kLogbuchDetails';
	const kLogbuch = 'kLogbuch';
	const cArtNr = 'cArtNr';
	const cPreisAlt = 'cPreisAlt';
	const fPreisAlt = 'fPreisAlt';
	const cPreisNeu = 'cPreisNeu';
	const fPreisNeu = 'fPreisNeu';
	const cDifferenz = 'cDifferenz';
	const cWaehrung = 'cWaehrung';
	const cEinstellungen = 'cEinstellungen';
	const cName = 'cName';
	const COLUMN_NAMES = [
		'kLogbuchDetails',
		'kLogbuch',
		'cArtNr',
		'cPreisAlt',
		'fPreisAlt',
		'cPreisNeu',
		'fPreisNeu',
		'cDifferenz',
		'cWaehrung',
		'cEinstellungen',
		'cName',
	];
	const COLUMN_DEFINITIONS = [
		'kLogbuchDetails' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLogbuch' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cArtNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cPreisAlt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fPreisAlt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPreisNeu' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fPreisNeu' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDifferenz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cWaehrung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cEinstellungen' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kLogbuchDetails */
	public $kLogbuchDetails;

	/** @var int kLogbuch */
	public $kLogbuch;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var string cPreisAlt */
	public $cPreisAlt;

	/** @var string fPreisAlt */
	public $fPreisAlt;

	/** @var string cPreisNeu */
	public $cPreisNeu;

	/** @var string fPreisNeu */
	public $fPreisNeu;

	/** @var string cDifferenz */
	public $cDifferenz;

	/** @var string cWaehrung */
	public $cWaehrung;

	/** @var string cEinstellungen */
	public $cEinstellungen;

	/** @var string cName */
	public $cName;
}
