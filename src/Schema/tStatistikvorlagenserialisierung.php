<?php

namespace App\Schema;

class tStatistikvorlagenserialisierung
{
	const TABLE_NAME = 'tStatistikvorlagenserialisierung';
	const kStatistikvorlagenserialisierung = 'kStatistikvorlagenserialisierung';
	const kBenutzer = 'kBenutzer';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const cAuswertungsvorlage = 'cAuswertungsvorlage';
	const cDarstellungsvorlage = 'cDarstellungsvorlage';
	const COLUMN_NAMES = [
		'kStatistikvorlagenserialisierung',
		'kBenutzer',
		'cName',
		'cBeschreibung',
		'cAuswertungsvorlage',
		'cDarstellungsvorlage',
	];
	const COLUMN_TYPES = [
		'kStatistikvorlagenserialisierung' => 'int',
		'kBenutzer' => 'int',
		'cName' => 'varchar',
		'cBeschreibung' => 'varchar',
		'cAuswertungsvorlage' => 'varchar',
		'cDarstellungsvorlage' => 'varchar',
	];

	/** @var int kStatistikvorlagenserialisierung */
	public $kStatistikvorlagenserialisierung;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var string cAuswertungsvorlage */
	public $cAuswertungsvorlage;

	/** @var string cDarstellungsvorlage */
	public $cDarstellungsvorlage;
}
