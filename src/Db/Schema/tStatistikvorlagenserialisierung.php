<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kStatistikvorlagenserialisierung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cBeschreibung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'cAuswertungsvorlage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cDarstellungsvorlage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
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
