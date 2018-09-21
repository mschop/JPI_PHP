<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kLogbuchDetails' => 'int',
		'kLogbuch' => 'int',
		'cArtNr' => 'varchar',
		'cPreisAlt' => 'varchar',
		'fPreisAlt' => 'decimal',
		'cPreisNeu' => 'varchar',
		'fPreisNeu' => 'decimal',
		'cDifferenz' => 'varchar',
		'cWaehrung' => 'varchar',
		'cEinstellungen' => 'varchar',
		'cName' => 'varchar',
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
